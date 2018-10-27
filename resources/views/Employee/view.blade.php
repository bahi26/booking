<a href="/createEmployee" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
<br>
@foreach($employees as $employee)

    {{'name: '.$employee->name}}<br>
    {{'salary: '.$employee->salary}}<br>
    {{'date_of_birth: '.$employee->date_of_birth}}<br>
    {{'phone: '.$employee->phone}}<br>
    {{'national_id: '.$employee->national_id}}<br>
    {{'job: '.$employee->job}}<br>
@endforeach