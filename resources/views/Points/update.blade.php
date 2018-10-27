<form method="post" action="/updatePoints/{{$points->id}}">
{{csrf_field()}}        <!--  General -->

    <input type="text" name="name"  value="{{$points->name}}"  placeholder="enter name">
    <br/>
    <input type="text" name="length_of_stay" value="{{$points->length_of_stay}}"   placeholder="enter length of stay">
    <br/>
    <input type="text" name="incentive_percentage" value="{{$points->incentive_percentage}}"   placeholder="enter incentive percentage">
    <br/>

    <button  type="submit">
        Save
    </button>
</form>