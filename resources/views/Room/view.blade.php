<a href="/createRoom" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($rooms as $room)
    <a href="/updateRoom/{{$room->id}}"> <i class="fa fa-edit" style="padding-left: 25px"></i>update</a><br>
    <a href="deleteRoom/{{$room->id}} "> <i class="fa fa-edit" style="padding-left: 25px"></i>delete</a><br>
    {{'number: '.$room->number}}<br>
    {{'type: '.$room->type}}<br>
    {{'number_of_beds: '.$room->number_of_beds}}<br>
    {{'cost_per_week_egy: '.$room->cost_per_week_egy}}<br>
    {{'cost_per_2week_egy: '.$room->cost_per_2week_egy}}<br>
    {{'cost_per_3week_egy: '.$room->cost_per_3week_egy}}<br>
    {{'cost_per_4week_egy: '.$room->cost_per_4week_egy}}<br>
    {{'cost_per_weekend_egy: '.$room->cost_per_weekend_egy}}<br>
    {{'cost_per_week_dol: '.$room->cost_per_week_dol}}<br>
    {{'cost_per_2week_dol: '.$room->cost_per_2week_dol}}<br>
    {{'cost_per_3week_dol: '.$room->cost_per_3week_dol}}<br>
    {{'cost_per_4week_dol: '.$room->cost_per_4week_dol}}<br>
    {{'cost_per_weekend_dol: '.$room->cost_per_weekend_dol}}<br>
@endforeach