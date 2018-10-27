<form method="post" action="/editExercise/{{$exercise->id}}">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="name"   value="{{$exercise->name}}" required>
    <br/>
    <input type="text" name="duration" value="{{$exercise->duration}}"  placeholder="duration"required>
    <br/>
    <input type="text" name="calories" value="{{$exercise->calories}}" placeholder="calories" required>
    <br/>


    <select name="employee_id">
        @foreach($employees as $employee)
            @if($employee->id===$exercise->employee_id)
                <option value="{{$employee->id}}"  selected>{{$employee->name}}</option>
            @else
                <option value="{{$employee->id}}"  >{{$employee->name}}</option>
            @endif
        @endforeach
    </select>
    <br/>
    <br/>
    <button  type="submit">
        save
    </button>
</form>