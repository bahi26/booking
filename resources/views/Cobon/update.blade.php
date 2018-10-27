<form method="post" action="/updateCobon/{{$cobon->id}}">
{{csrf_field()}}        <!--  General -->
    <input type="text" name="number" value="{{$cobon->number}}"   placeholder="enter number">
    <br/>
    <input type="text" name="name"  value="{{$cobon->name}}"  placeholder="enter name">
    <br/>
@if($cobon->type =='once')
    <input type="radio" name="type" value="once" checked>once
@else
        <input type="radio" name="type" value="once" >once
@endif
    @if($cobon->type=='permanent')
        <input type="radio" name="type" value="permanent" checked >permanent
@else
        <input type="radio" name="type" value="permanent" >permanent
    @endif
    @if($cobon->type=='limit')
    <input type="radio" name="type" value="limit" checked>limit
@else
        <input type="radio" name="type" value="limit">limit
    @endif
    <br/>

    <input type="date" name="expired" value="{{$cobon->expired}}">
    <br/>

    <input type="text"  name="time_of_use" value="{{$cobon->time_of_use}}" placeholder="enter time of use">
    <br/>

    <button  type="submit">
        Save
    </button>
</form>