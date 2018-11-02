<br>
@foreach($user as $user)
    <br>
    {{'name: '.$user->name}}<br>
    {{'email: '.$user->email}}<br>
    {{'Lost calories: '.$user->sum}}<br>
    {{'daily burning: '.$user->daily}}<br>
    <br><br>
@endforeach
<br><br>
@foreach($reports as $report)
    <br>
    {{'date: '.$report->date}}<br>
    {{'name: '.$report->name}}<br>
    {{'Lost calories: '.$report->calories}}<br>
    @if($report->sum !=0)
        <br>
    {{'total: '.$report->sum}}
    @endif
    <br><br>
@endforeach