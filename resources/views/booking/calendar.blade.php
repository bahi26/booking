<html>
<head>
    <title>Squad 101</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Erp, Allied Consulting , Erp Courses , Sap , IOT , Gis, Consulting, Support, Training,Outsourcing,Development,Integration,Application,SAP Consultancy , Technical Support" />

    <link rel="shortcut icon" type="image/png" href="images/newlogo.png" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="/css/calendar.css" type="text/css" rel="stylesheet" />

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/styleSlider.css">
    <link rel="stylesheet" href="css/squad.css">
    <link rel="stylesheet" href="css/popUp.css">
    <link rel="stylesheet" href="css/form.css">


    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>



    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
    <!-- //fonts -->

    <!-- Spectrum -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-left grid">
            <div class="grid__item color-1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">

                <!--  <h1>
                            <img src="images/newlogo.png" style="display: inline;    margin-bottom: 20px; width:150px">
                            </h1>-->
            </div>


        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div id="myimage" class="banner">
    <div class="ban-top">
        <div class="container">
            <div class="ban-top-con">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-sm-4" id='cssmenu'>
        <ul>
            <li class='active'><a href='/book'>New Booking</a></li>
            <li class="dropdown-item"><a href='/profile'>Profile</a></li>

            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{csrf_field()}}        <!--  General -->
                </form>
            </li>

            <li>
                @if(Auth::user()->days>=0&&Auth::user()->days<=14)
                    <img class="userImg" src="/images/RECRUIT.jpg"  title="Recruit-مجند">
                @elseif(Auth::user()->days>=15&&Auth::user()->days<=28)
                    <img class="userImg" src="/images/SERGEANT.jpg" title="Sergeant-ملازم">

                @elseif(Auth::user()->days>=29&&Auth::user()->days<=42)
                    <img class="userImg" src="/images/COMMANDO.jpg" title="Commando-فدائ">
                @elseif(Auth::user()->days>=43&&Auth::user()->days<=56)
                    <img class="userImg" src="/images/COLONEL.jpg" title="Colonel-عقيد">
                @elseif(Auth::user()->days>=57)
                    <img class="userImg" src="/images/GENERAL.jpg" width="500px" title="General-لواء" >
                @endif


                <p class="userName"> {{ Auth::user()->name }}</p>
                <img class="grid__item color-1 wow zoomIn logoImg" src="/images/ColoredLogo.png">
            </li>
        </ul>   </div>
    <div class="col-sm-8 rightBody">

    <?php


        echo draw_calendar($month,$bookings,$rooms,$type);

        ?>
    </div>
</div>
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<script src="js/index.js"></script>


<script src="js/popUp.js"></script>
<script src="js/squad.js"></script>

</body>

</html>


<?php

function draw_calendar($date,$bookings,$rooms,$type){
    $month = date("m",strtotime($date));
    $year = date("y",strtotime($date));

    /* draw table */
    $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

    /* table headings */
    $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

    /* days and weeks vars now ... */
    $running_day = date('w',mktime(0,0,0,$month,1,$year));
    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    $days_in_this_week = 1;
    $day_counter = 0;
    $dates_array = array();

    /* row for week one */
    $calendar.= '<tr class="calendar-row">';

    /* print "blank" days until the first of the current week */
    for($x = 0; $x < $running_day; $x++):
        $calendar.= '<td class="calendar-day-np"> </td>';
        $days_in_this_week++;
    endfor;

    /* keep going with days.... */
    if ($type=="dayuse"):
        for($list_day = 1; $list_day <= $days_in_month; $list_day++):

            $calendar.= '<td class="calendar-day" style="background-color: #fff">';
                $calendar.= '<a href="/complete/'.$list_day.'" ><button class="book"> Book Now</button></a><div class="day-number">'.$list_day .'</div>';

            /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
            $calendar.= str_repeat('<p> </p>',2);

            $calendar.= '</td>';
            if($running_day == 6):
                $calendar.= '</tr>';
                if(($day_counter+1) != $days_in_month):
                    $calendar.= '<tr class="calendar-row">';
                endif;
                $running_day = -1;
                $days_in_this_week = 0;
            endif;
            $days_in_this_week++; $running_day++; $day_counter++;
        endfor;

    elseif  (count($bookings)==0):
        for($list_day = 1; $list_day <= $days_in_month; $list_day++):

            $calendar.= '<td class="calendar-day" style="background-color: #fff">';
                /* add in the day number */
            if ($days_in_this_week==5):
                $calendar.= '<a href="/complete/'.$list_day.'" ><button class="book"> Book Now</button></a><div class="day-number">'.$list_day .'</div>';

            else:
                $calendar.= '<div class="day-number">'.$list_day.'</div>';
            endif;
                /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
                $calendar.= str_repeat('<p> </p>',2);

                $calendar.= '</td>';
                if($running_day == 6):
                    $calendar.= '</tr>';
                    if(($day_counter+1) != $days_in_month):
                        $calendar.= '<tr class="calendar-row">';
                    endif;
                    $running_day = -1;
                    $days_in_this_week = 0;
                endif;
                $days_in_this_week++; $running_day++; $day_counter++;
        endfor;
else:


        for($list_day = 1; $list_day <= $days_in_month; $list_day++):
            $counter=0;
        for ($x=0;$x<count($bookings);$x++):

$day=strtotime($year.'-'.$month.'-'.$list_day);
            $newformat = date('Y-m-d',$day);


            if ($bookings[$x]->room->type==$rooms[0]->type&&$newformat>=$bookings[$x]->from&&$newformat<=$bookings[$x]->to):
{
$counter++;
 }
               endif;
        endfor;


if ($counter==(($rooms[0]->number_of_beds)*count($rooms))):
    if($days_in_this_week==5):
    $calendar.= '<td class="calendar-day" style="background-color: red">';
    $calendar.= '<div class="day-number">'.$list_day.'</div>';
        $calendar.= '<p class="booked">Booked</p>';

    else:
        $calendar.= '<td class="calendar-day" style="background-color: #fff">';
        $calendar.= '<div class="day-number">'.$list_day.'</div>';
    endif;

else:
    $calendar.= '<td class="calendar-day" style="background-color: #fff">';
if ($days_in_this_week==5):

    $calendar.= '<a href="/complete/'.$list_day.'/" ><button class="book"> Book Now</button></a><div class="day-number">'.$list_day .'</div>';

else:
    $calendar.= '<div class="day-number">'.$list_day.'</div>';
endif;

endif;

        /* add in the day number */

        /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
        $calendar.= str_repeat('<p> </p>',2);

        $calendar.= '</td>';
        if($running_day == 6):
            $calendar.= '</tr>';
            if(($day_counter+1) != $days_in_month):
                $calendar.= '<tr class="calendar-row">';
            endif;
            $running_day = -1;
            $days_in_this_week = 0;
        endif;
        $days_in_this_week++; $running_day++; $day_counter++;
        endfor;

    endif;
    /* finish the rest of the days in the week */
    if($days_in_this_week < 8):
        for($x = 1; $x <= (8 - $days_in_this_week); $x++):
            $calendar.= '<td class="calendar-day-np"> </td>';
        endfor;
    endif;

    /* final row */
    $calendar.= '</tr>';

    /* end the table */
    $calendar.= '</table>';

    /* all done, return result */
    return $calendar;
}
//echo draw_calendar($month,$bookings,$rooms,$type);

?>
