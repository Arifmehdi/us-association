<div class="topbar bg-primary">
    <div class="dropdown profile-dropdown">
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="text-white">{{ Auth::user()->name }}</span> <img src="{{ asset('backend/images/users/1.jpg') }}" class="width-40 round-img" alt="Image">
        </a>
        <div class="dropdown-menu">
            <ul>
                <li><a class="dropdown-item" href="#">My Account</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
