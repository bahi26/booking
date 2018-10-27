<?php

namespace App\Http\Controllers;

use App\booking;
use App\room;
use App\Cobon;
use App\User;
use App\points;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class bookingController extends Controller
{
    //
    public function book(Request $request)
    {
        if (Auth::id() == null) {
            return redirect("/login");

        }
        if ($request->isMethod('post')) {

            $information = array($request->input("Estgmam"), $request->input("room"), $request->input("month"), $request->input("year"));


            $_SESSION['type'] = $request->input("Estgmam");
            if ($request->input("room") == "double") {
                $_SESSION['room'] = $request->input("double");

            } else {
                $_SESSION['room'] = $request->input("room");

            }
            $_SESSION['month'] = $request->input("month");
            // $_SESSION['year']=$request->input("year");
            $month = date("m", strtotime($_SESSION['month']));
            $current = date("m", strtotime(date('Y-m-d H:i:s')));
            $year = date("y", strtotime($_SESSION['month']));
            $currentYear = date("y", strtotime(date('Y-m-d H:i:s')));
            if ($month < $current && ($year == $currentYear || $year < $currentYear)) {
                $message = "you mustn't choose old month";
                return redirect("/book")->with("message", $message);

            }
            return redirect("/calendar");
        }
        return view('booking.booking');
    }

    public function complete(Request $request, $day)
    {


        $origin = $day;
        $day = strtotime($_SESSION['month'] . '-' . $day);
        $newformat = date('Y-m-d', $day);

        if ($_SESSION['type'] == "dayuse") {
            $booking = new booking();
            $booking->from = $_SESSION['month'] . '-' . $origin;
            $booking->to = $_SESSION['month'] . '-' . $origin;
            $booking->status = "complete";

            $booking->cost = "222";
            $booking->user_id = Auth::id();


            $booking->save();
            return redirect("/createQuestionnaire/" . $booking->id);


        }
        $rooms = room::where("type", "=", $_SESSION['room'])->get();
        $month = date("m", strtotime($_SESSION['month']));
        $year = date("y", strtotime($_SESSION['month']));
        $bookings = booking::whereMonth("from", "=", $month)->whereYear("from", "=", $year)->orWhere(function ($query) use ($year, $month) {
            $query->whereMonth('to', '=', $month)
                ->whereYear('to', '=', $year);
        })->get();
        $room = null;
        for ($y = 0; $y < count($rooms); $y++) {
            $counter = 0;

            for ($x = 0; $x < count($bookings); $x++) {
                if ($newformat >= $bookings[$x]->from && $newformat <= $bookings[$x]->to) {
                    if ($rooms[$y]->id == $bookings[$x]->room_id) {
                        $counter++;
                    }
                }

            }
            if ($counter < $rooms[$y]->number_of_beds) {
                $room = $rooms[$y];
                break;
            }


        }

        if ($request->isMethod('post')) {
            $discount = 0;
            $cost=0;
            $user = User::find(Auth::id());
            if($user->country=='Egypt') {
                $from = $_SESSION['month'] . '-' . $origin;
                if ($request->input("type") == "weekend") {
                    $to = date('Y-m-d', strtotime($from . ' + ' . 2 . ' days'));
                    $cost = $room->cost_per_weekend_egy;

                } else {
                    $number = $request->input("number");
                    echo $number;
                    if ($request->input("number") == "Choose number of weeks") {
                        $message = "please choose number of weeks";

                        return redirect("/complete/" . $origin)->with("message", $message);                    }
                    $to = date('Y-m-d', strtotime($from . ' + ' . (($number * 7) - 1) . ' days'));
                    if ($number == 1) {
                        $cost = $room->cost_per_week_egy;
                    } elseif ($number == 2) {
                        $cost = $room->cost_per_2week_egy;
                    } elseif ($number == 3) {
                        $cost = $room->cost_per_3week_egy;
                    } elseif ($number == 4) {
                        $cost = $room->cost_per_4week_egy;
                    }
                }
            }
            else{
                $from = $_SESSION['month'] . '-' . $origin;
                if ($request->input("type") == "weekend") {
                    $to = date('Y-m-d', strtotime($from . ' + ' . 2 . ' days'));
                    $cost = $room->cost_per_weekend_dol;

                } else {
                    $number = $request->input("number");
                    if ($number == null) {
                        $number = 1;
                    }
                    $to = date('Y-m-d', strtotime($from . ' + ' . (($number * 7) - 1) . ' days'));
                    if ($number == 1) {
                        $cost = $room->cost_per_week_dol;
                    } elseif ($number == 2) {
                        $cost = $room->cost_per_2week_dol;
                    } elseif ($number == 3) {
                        $cost = $room->cost_per_3week_dol;
                    } elseif ($number == 4) {
                        $cost = $room->cost_per_4week_dol;
                    }
                }
            }
            //end of if
            $bookings = booking::whereBetween('from', [$from, $to])
                ->orWhereBetween('to', [$from, $to])->get();
            $dateStart = $from;
            $dateEnd = $to;
            $current_date = $dateStart;
            $counter = 0;

            while (strtotime($current_date) < strtotime($dateEnd)) {
                $counter = 0;
                for ($x = 0; $x < count($bookings); $x++) {


                    if ($bookings[$x]->room->type == $rooms[0]->type && $current_date >= $bookings[$x]->from && $current_date <= $bookings[$x]->to) {
                        $counter++;
                    }
                }

                $current_date = date("Y-m-d", strtotime("+1 day", strtotime($current_date)));
            }
            if ($counter == (($rooms[0]->number_of_beds) * count($rooms))) {
                $message = "sorry, the rooms are not available in this duration, please change the number of weeks or the start of booking";

                return redirect("/complete/" . $origin)->with("message", $message);

            }

            if ($request->input("cobone") != null) {
                $cobone = Cobon::where("number", "=", $request->input("cobone"))->first();
                $current = date(date('Y-m-d H:i:s'));
                if ($cobone == null) {
                    $message = "sorry, there is no cobone with this number";


                    return redirect("/complete/" . $origin)->with("message", $message);
                }
                if ($cobone->expired != null && $cobone->expired < $current) {
                    $message = "sorry, the cobone is expired";


                    return redirect("/complete/" . $origin)->with("message", $message);
                }
                if ($cobone->type == "once") {
                    $discount = $cobone->discount;
                    $cobone->delete();

                } elseif ($cobone->type == "limit") {
                    $discount = $cobone->discount;
                    $cobone->time_of_use--;
                    if ($cobone->time_of_use == 0) {
                        $cobone->delete();

                    } else {
                        $cobone->save();
                    }

                } else {
                    $discount = $cobone->discount;

                }


            }

            $booking = new booking();

            $booking->from = $from;
            $booking->to = $to;
            $booking->room_id = $room->id;
            $booking->status = "complete";
            $minus=0;

$actual=$cost;
            if ($discount != 0) {

                $minus=($cost*$discount)/100;
                $cost=$cost-$minus;
                $booking->cost=$cost;
            } else {
                $booking->cost = $cost;

            }
            $booking->user_id = Auth::id();
            $message = $booking->cost;


            $user = User::find(Auth::id());
            if ($request->input("type") == "weekend") {

                $user->days += 3;
            } else {
                $user->days += $number * 7;


            }
            $points=points::where('start','<=',$user->days)->where('finish','>=',$user->days)->first();

            $bullts=($points->incentive_percentage*$cost)/100;
            $user->bullets+=$bullts;
           $user->save();
           $booking->save();
            return redirect("/price/" . $booking->id)->with("cost",$message)->with("discount",$discount)->with("actual",$actual);
        }
        $data = array('room' => $room, 'day' => $origin);
        return view('booking.complete', $data);
    }

    public function calendar()
    {
        // $information =Session::get("information");
        $month = date("m", strtotime($_SESSION['month']));
        $year = date("y", strtotime($_SESSION['month']));

        $bookings = booking::whereMonth("from", "=", $month)->whereYear("from", "=", '20' . $year)->orWhere(function ($query) use ($month, $year) {
            $query->whereMonth('to', '=', $month)
                ->whereYear('to', '=', '20' . $year);
        })->get();
        $rooms = room::where("type", "=", $_SESSION['room'])->get();
        $real = array();
        for ($x = 0; $x < count($bookings); $x++) {
            if ($bookings[$x]->room_id != null) {
                array_push($real, $bookings[$x]);
            }
        }
        $data = array('rooms' => $rooms, 'bookings' => $real, 'month' => $_SESSION['month'], 'type' => $_SESSION['type']);
        return view('booking.calendar', $data);


    }
    public function price($id)
    {
        // $information =Session::get("information");
        if (Session::get("cost")==null)
        {
           return redirect("/");

            //  exit();


        }
        $data = array('cost' => Session::get("cost"), 'discount' => Session::get("discount"), 'actual' => Session::get("actual"),'id' =>$id);
        return view('booking.price',$data);


    }
}
