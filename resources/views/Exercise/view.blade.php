<a href="/createExercise" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($exercises as $exercise)
    <a href="{{ Request::root() }}/editExercise/{{$exercise->id}}">edit</a>
    <br>
    {{'name: '.$exercise->name}}<br>
    {{'duration: '.$exercise->duration}}<br>
    {{'calories: '.$exercise->calories}}<br>
    <br><br>
@endforeach