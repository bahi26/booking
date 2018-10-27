<form method="post" action="/createRoom">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="number"   placeholder="room number"required>
    <br/>
    <input type="number" name="number_of_beds"   placeholder="number_of_beds"required>
    <br/>
    <input type="number" name="cost_per_week_egy"   placeholder="cost_per_week_egy"required>
    <br/>
    <input type="number" name="cost_per_2week_egy"   placeholder="cost_per_2week_egy"required>
    <br/>
    <input type="number" name="cost_per_3week_egy"   placeholder="cost_per_3week_egy"required>
    <br/>
    <input type="number" name="cost_per_4week_egy"   placeholder="cost_per_4week_egy"required>
    <br/>
    <input type="number" name="cost_per_weekend_egy"   placeholder="cost_per_weekend_egy"required>
    <br/>
    <input type="number" name="cost_per_week_dol"   placeholder="cost_per_week_dol"required>
    <br/>
    <input type="number" name="cost_per_2week_dol"   placeholder="cost_per_2week_dol"required>
    <br/>
    <input type="number" name="cost_per_3week_dol"   placeholder="cost_per_3week_dol"required>
    <br/>
    <input type="number" name="cost_per_4week_dol"   placeholder="cost_per_4week_dol"required>
    <br/>
    <input type="number" name="cost_per_weekend_dol"   placeholder="cost_per_weekend_dol"required>
    <br/>

    <select name="type">
        <option value="single" >single</option>
        <option value="public">douple with shared toilet</option>
        <option value="private">double with private toilet</option>
        <option value="four">quad</option>

    </select>

<br/>


    <button  type="submit">
        Add
    </button>
</form>