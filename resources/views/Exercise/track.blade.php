{{$exercise->name}}

@foreach($users as $user)
    {{'name'.$user->name}}<br>
    {{'name'.$user->email}}<br>
    {{'name'.$user->date}}<br>
    <a href="{{Request::root() }}/unassign/{{$user->id}}">delete</a>
@endforeach