<div class="flex justify-center space-x-10">
    <div>
        <a href="/home/{{ session()->get('student')->username }}"><abbr title="Home"><i class="fa fa-home"></i></abbr></a>
    </div>
    <div>
        <a href="/profile/{{ session()->get('student')->username }}"><abbr title="{{ session('student')->name }}"><i class="fa fa-user"></i></abbr></a>
    </div>
    <div>
        <a href="/claim"><abbr title="Claim Requests"><i class="fa fa-bell"></i></abbr></a>
    </div>
    <div>
        <a href="/logout"><abbr title="Logout"><i class="fa fa-power-off"></i></abbr></a>
    </div>
</div>