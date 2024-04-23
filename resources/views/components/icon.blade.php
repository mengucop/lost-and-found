<div class="text-center">
    <li class="text-sky-400 underline hover:text-sky-600">
        <a href="/home/{{ session()->get('student')->username }}"><p>Home</p></a>
    </li>
    <li class="text-sky-400 underline hover:text-sky-600">
        <a href="/profile/{{ session()->get('student')->username }}"><p>Profile</p></a>
    </li>
    <li class="text-sky-400 underline hover:text-sky-600">
        <a href="/logout"><p>Logout</p></a>
    </li>
</div>