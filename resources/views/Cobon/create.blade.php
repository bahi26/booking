<form method="post" action="/createCobon">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="number"   placeholder="number"required>
    <br/>
    <input type="text" name="name"   placeholder="name"required>
    <br/>
    <br/>
    <input type="text" name="discount"   placeholder="discount"required>
    <br/>


  <input type="radio" name="type" value="once">once
  <input type="radio" name="type" value="permanent">permanent
    <input type="radio" name="type" value="limit">limited
    <br/>

    <input type="date" name="expired">
    <br/>
    <input type="text" name="time_of_use" placeholder="time_of_use">
    <br/>
    <button  type="submit">
        Add
    </button>
</form>