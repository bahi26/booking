<form method="post" action="/createEmployee">
{{csrf_field()}}
<!--  General -->
    <input type="text" name="name"   placeholder="name"required>
    <br/>
    <input type="text" name="salary"   placeholder="salary"required>
    <br/>
    <input type="date" name="date_of_birth" required>
    <br/>
    <input type="text" name="phone"   placeholder="phone"required>
    <br/>
    <input type="text" name="national_id"   placeholder="national_id"required>
    <br/>
    <input type="text" name="job" placeholder="job" required>
    <br/>

    <select name="type">
        <option value="fixed" >fixed</option>
        <option value="freelancer">freelancer</option>
    </select>
    <br/>
    <input type="checkbox" name="insurance" value="1">have insurance
    <br/>


    <button  type="submit">
        Add
    </button>
</form>