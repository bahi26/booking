<form method="post" action="/editExercise/{{$exercise->id}}" enctype="multipart/form-data">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="name"   value="{{$exercise->name}}" required>
    <br/>
    <input type="text" name="duration" value="{{$exercise->duration}}"  placeholder="duration"required>
    <br/>
    <input type="text" name="calories" value="{{$exercise->calories}}" placeholder="calories" required>
    <br/>
    <input type="text" name="description" value="{{$exercise->description}}" placeholder="description" required>
    <br/>
    <img src="{{asset($exercise->photo)}}" width="320" height="240">
    <video width="320" height="240" controls>
        <source src="{{asset($exercise->video)}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <br>
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
    <input type="file" name="video" accept="video/*" placeholder="video">
    <br/>
    <input type="file" name="image" accept="image/*" placeholder="image">
    <br/>
    <br/>
    <button  type="submit">
        save
    </button>
</form>