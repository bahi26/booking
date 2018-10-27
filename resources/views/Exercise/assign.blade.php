@foreach($users as $user)
    <form method="post" action="/assign">
    {{csrf_field()}}        <!--  General -->
        <label>{{$user->name}}</label>
        <br/>
        <label>{{$user->email}}</label>
        <br/>
        <input type="hidden" value="{{$user->id}}" name="user_id">
        <input type="number" name="duration" value="{{$user->duration}}" required>
        <select name="exercise_id">
            @foreach($exercises as $exercise)
                @if($exercise->id===$user->exercise_id)
                     <option value="{{$exercise->id}}"  selected>{{$exercise->name}}</option>
                @else
                    <option value="{{$exercise->id}}">{{$exercise->name}}</option>
                @endif
            @endforeach
        </select>
        <br/>
        <br/>
        <button  type="submit">
            save
        </button>
    </form>
@endforeach
