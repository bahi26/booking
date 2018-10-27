<a href="/createCobon" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($cobon as $cobon)
    <a href="/updateCobon/{{$cobon->id}}"> <i class="fa fa-edit" style="padding-left: 25px"></i>update</a><br>
    <a href="deleteCobon/{{$cobon->id}} "> <i class="fa fa-edit" style="padding-left: 25px"></i>delete</a><br>
    {{'number: '.$cobon->number}}<br>
    {{'name: '.$cobon->name}}<br>
    {{'type: '.$cobon->type}}<br>
    {{'expired: '.$cobon->expired}}<br>
    {{'time_of_use: '.$cobon->time_of_use}}<br>
@endforeach