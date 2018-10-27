<a href="/createMaintenance" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($maintenance as $maintenance)

    {{'cause: '.$maintenance->cause}}<br>
    {{'cost: '.$maintenance->cost}}<br>
    {{'duration: '.$maintenance->duration}}<br>
    {{'type: '.$maintenance->type}}<br>
@endforeach