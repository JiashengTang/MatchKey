
@section('sidebar')
<div style="margin-top: 70px; margin-right: 10px;">
    <img src="public/matchkey.png" height="180" width="200">
</div>
<br>
@if(Session::get('userData'))
<h2>Hi {{Session::get('userData')}}!</h2>
<h3>Welcome to our website</h3>
<p><a class="btn btn-secondary" href="{{ route('logout') }}" role="button" id="logout" >Logout &raquo;</a></p>
@endif
@show