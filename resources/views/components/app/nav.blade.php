<div class="navbar-menu">
    <ul>
        <li class="{{ Route::is('page.home') ? 'active' : '' }}">
            <a href="{{ route('page.home') }}">
                <div class="icon">
                    <img class="unactive" src="{{asset('assets/images/svg/home.svg')}}" alt="home">
                    <img class="active" src="{{asset('assets/images/svg/home-fill.svg')}}" alt="home">
                </div>
                <span>Home</span>
            </a>
        </li>
        <li class="{{ Route::is('page.saved') ? 'active' : '' }}">
            <a href="{{ route('page.saved') }}">
                <div class="icon">
                    <img class="unactive" src="{{asset('assets/images/svg/save.svg')}}" alt="save">
                    <img class="active" src="{{asset('assets/images/svg/save-fill.svg')}}" alt="save">
                </div>
                <span>Saved</span>
            </a>
        </li>
        <li class="{{ Route::is('soon') ? 'active' : '' }}">
            <a href="{{ route('soon') }}">
                <div class="icon">
                    <img class="unactive" src="{{asset('assets/images/svg/setting.svg')}}" alt="setting">
                    <img class="active" src="{{asset('assets/images/svg/setting-fill.svg')}}" alt="setting">
                </div>
                <span>Learn</span>
            </a>
        </li>
       

        <li class="{{ Route::is('profile.index') ? 'active' : '' }}">
            <a href="{{ route('profile.index') }}">
                <div class="icon">
                    <img class="unactive" src="{{asset('assets/images/svg/profile.svg')}}" alt="profile">
                    <img class="active" src="{{asset('assets/images/svg/profile-fill.svg')}}" alt="profile">
                </div>
                <span>Profile</span>
            </a>
        </li>
    </ul>
</div>
