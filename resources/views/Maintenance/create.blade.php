<form method="post" action="/createMaintenance">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="cause"   placeholder="cause"required>
    <br/>
    <input type="text" name="cost"   placeholder="cost"required>
    <br/>
    <input type="date" name="duration" required>
    <br/>

    <select name="type">
        <option value="scheduled" >scheduled</option>
        <option value="exception">exception</option>
    </select>

<br/>


    <button  type="submit">
        Add
    </button>
</form>