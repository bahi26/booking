<form method="post" action="/createExercise">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="name"   placeholder="name"required>
    <br/>
    <input type="text" name="duration"   placeholder="duration"required>
    <br/>
    <input type="text" name="calories"  placeholder="calories" required>
    <br/>


    <select name="employee_id">
        @foreach($employees as $employee)
        <option value="{{$employee->id}}"  >{{$employee->name}}</option>
            @endforeach
    </select>
    <br/>
    <br/>


    <button  type="submit">
        Add
    </button>
</form>