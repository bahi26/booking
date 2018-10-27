<a href="/createSupplier" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($suppliers as $supplier)
    {{'name: '.$supplier->name}}<br>
@endforeach