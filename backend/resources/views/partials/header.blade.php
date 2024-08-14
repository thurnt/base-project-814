<ul>
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('logout') }}">Logout</a></li>
</ul>

<?php
var_dump(Session::has('api_token'));
?>