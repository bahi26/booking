<input type="text" name="name"  value="{{$points->name}}"  placeholder="enter name">
<br/>
<input type="text" name="length_of_stay" value="{{$points->length_of_stay}}"   placeholder="enter length of stay">
<br/>
<input type="text" name="incentive_percentage" value="{{$points->incentive_percentage}}"   placeholder="enter incentive percentage">
<br/>
<a href="/updatePoints/{{$points->id}}"> <i class="fa fa-edit" style="padding-left: 25px"></i>update</a>
<a href="/viewPoints"> <i class="fa fa-edit" style="padding-left: 25px"></i>view all</a><br>

