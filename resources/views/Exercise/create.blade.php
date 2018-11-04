<form method="post" action="/createExercise" enctype="multipart/form-data">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="name"   placeholder="name"required>
    <br/>
    <input type="text" name="duration"   placeholder="duration"required>
    <br/>
    <input type="text" name="calories"  placeholder="calories" required>
    <br/>
    <input type="text" name="description" placeholder="description" required>
    <br/>
    <input type="file" name="video" accept="video/*">
    <br/>
    <input type="file" name="image" accept="image/*">
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