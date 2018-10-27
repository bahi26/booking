<form method="post" action="/updateRoom/{{$rooms->id}}">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="number" value="{{$room->number}}">
    <br/>
    <input type="number" name="number_of_beds" value="{{$room->number_of_beds}}">
    <br/>
    <input type="number" name="cost_per_week_egy"  value="{{$room->cost_per_week_egy}}">
    <br/>
    <input type="number" name="cost_per_2week_egy" value="{{$room->cost_per_2week_egy}}">
    <br/>
    <input type="number" name="cost_per_3week_egy" value="{{$room->cost_per_3week_egy}}">
    <br/>
    <input type="number" name="cost_per_4week_egy" value="{{$room->cost_per_4week_egy}}">
    <br/>
    <input type="number" name="cost_per_weekend_egy" value="{{$room->cost_per_weekend_egy}}">
    <br/>
    <input type="number" name="cost_per_week_dol" value="{{$room->cost_per_week_dol}}">
    <br/>
    <input type="number" name="cost_per_2week_dol" value="{{$room->cost_per_2week_dol}}">
    <br/>
    <input type="number" name="cost_per_3week_dol" value="{{$room->cost_per_3week_dol}}">
    <br/>
    <input type="number" name="cost_per_4week_dol" value="{{$room->cost_per_4week_dol}}">
    <br/>
    <input type="number" name="cost_per_weekend_dol"value="{{$room->cost_per_weekend_dol}}">
    <br/>

    <select name="type">
        @if($room->type=='singe')
        <option value="single" selected>single</option>
            @else
            <option value="single">single</option>
            @endif
        @if($room->type=='public')
        <option value="public" selected>douple with shared toilet</option>
            @else
        <option value="public">douple with shared toilet</option>
            @endif
        @if($room->type=='private')
        <option value="private" selected>double with private toilet</option>
                @else
                <option value="private">double with private toilet</option>
                @endif
        @if($room-type=='four')
        <option value="four" selected>quad</option>
                @else
                <option value="four">quad</option>
        @endif
    </select>

    <br/>


    <button  type="submit">
        Save
    </button>
</form>