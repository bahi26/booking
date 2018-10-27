<form method="post" action="/createPoints">
{{csrf_field()}}        <!--  General -->

    <input type="text" name="name"   placeholder="name"required>
    <br/>
    <input type="text" name="start"   placeholder="start_of_stay"required>
    <input type="text" name="finish"   placeholder="end_of_stay"required>

    <br/>
    <input type="text" name="incentive_percentage" placeholder="incentive percentage"required>
    <br/>
    <button  type="submit">
        Add
    </button>
</form>