<br>
@foreach($users as $user)
    <a href="{{ Request::root() }}/viewReport/{{$user->id}}">viewDaily</a>
    <br>
    {{'name: '.$user->name}}<br>
    {{'email: '.$user->email}}<br>
    {{'Lost calories: '.$user->sum}}<br>
    {{'daily burning: '.$user->daily}}<br>
    <br><br>
@endforeach