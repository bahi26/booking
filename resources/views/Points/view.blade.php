<a href="/createPoints" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($points as $points)
    <a href="/updatePoints/{{$points->id}}"> <i class="fa fa-edit" style="padding-left: 25px"></i>update</a><br>
    <a href="deletePoints/{{$points->id}} "> <i class="fa fa-edit" style="padding-left: 25px"></i>delete</a><br>
    {{'name: '.$points->name}}<br>
    {{'start of stay: '.$points->start.'days'}}<br>
    {{'finish of stay: '.$points->finish.'days'}}<br>

    {{'incentive percentage: '.$points->incentive_percentage}}<br>

@endforeach