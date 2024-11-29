@php
    $skills = app\Models\Skill::latest()->get();
@endphp
<header id="header" class="main-header section-b-space">
    <div class="custom-container">
        <div class="header-panel">
            <div class="d-flex align-items-center gap-2">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
                    <i class="iconsax icon-btn" data-icon="text-align-left"> </i>
                </a>
            </div>
            <div class="d-flex align-items-center gap-2">
                <img class="img-fluid logo rounded" src="{{ asset('assets/images/logo/black.png') }}" alt="logo">
                <span class="fw-bold dark-text">Career Bridge</span>
            </div>

            <div class="d-flex align-items-center gap-sm-3 gap-2">
                <a href="#search-offcanvas" data-bs-toggle="offcanvas">
                    <i class="iconsax icon-btn" data-icon="search-normal-2"> </i>
                </a>
                {{-- <div class="dropdown more-options dropdown-menu-end">
                    <a class="btn dropdown-toggle mt-0 p-0" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="iconsax icon-btn" data-icon="menu-meatballs"> </i>
                    </a>

                    <ul class="dropdown-menu">
                        @auth
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i
                                        class="iconsax icon" data-icon="logout-2"><svg width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.2405 22.2705H15.1105C10.6705 22.2705 8.5305 20.5205 8.1605 16.6005C8.1205 16.1905 8.4205 15.8205 8.8405 15.7805C9.2405 15.7405 9.6205 16.0505 9.6605 16.4605C9.9505 19.6005 11.4305 20.7705 15.1205 20.7705H15.2505C19.3205 20.7705 20.7605 19.3305 20.7605 15.2605V8.74047C20.7605 4.67047 19.3205 3.23047 15.2505 3.23047H15.1205C11.4105 3.23047 9.9305 4.42047 9.6605 7.62047C9.6105 8.03047 9.2605 8.34047 8.8405 8.30047C8.4205 8.27047 8.1205 7.90047 8.1505 7.49047C8.4905 3.51047 10.6405 1.73047 15.1105 1.73047H15.2405C20.1505 1.73047 22.2505 3.83047 22.2505 8.74047V15.2605C22.2505 20.1705 20.1505 22.2705 15.2405 22.2705Z"
                                                fill="#292D32"></path>
                                            <path
                                                d="M15.0011 12.75H3.62109C3.21109 12.75 2.87109 12.41 2.87109 12C2.87109 11.59 3.21109 11.25 3.62109 11.25H15.0011C15.4111 11.25 15.7511 11.59 15.7511 12C15.7511 12.41 15.4111 12.75 15.0011 12.75Z"
                                                fill="#292D32"></path>
                                            <path
                                                d="M5.85141 16.0998C5.66141 16.0998 5.47141 16.0298 5.32141 15.8798L1.97141 12.5298C1.68141 12.2398 1.68141 11.7598 1.97141 11.4698L5.32141 8.11984C5.61141 7.82984 6.09141 7.82984 6.38141 8.11984C6.67141 8.40984 6.67141 8.88984 6.38141 9.17984L3.56141 11.9998L6.38141 14.8198C6.67141 15.1098 6.67141 15.5898 6.38141 15.8798C6.24141 16.0298 6.04141 16.0998 5.85141 16.0998Z"
                                                fill="#292D32"></path>
                                        </svg>
                                    </i><span key="t-logout">Logout</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="dropdown-item">
                                    Login</a> </li>
                            <li><a href="{{ 'register' }}" class="dropdown-item">
                                    Register</a> </li>
                        @endauth

                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</header>
<!-- sidebar starts -->
<div class="offcanvas sidebar-offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
    <div class="offcanvas-header sidebar-header">
        <div class="sidebar-logo">
            <img class="img-fluid logo rounded" src="{{ asset('assets/images/logo/black.png') }}" alt="logo">
            <span class="fw-bold dark-text">Career Bridge</span>
        </div>
    </div>

    <div class="offcanvas-body">
        {{-- <ul class="link-section switch-section">
            <li class="active">
                <a href="home.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="messages-2"> </i>
                    <h3>Chats</h3>
                </a>
            </li>
            <li>
                <a href="new-group-contact.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="group"> </i>
                    <h3>New Group</h3>
                </a>
            </li>
            <li>
                <a href="new-broadcast-contact.html" class="pages">
                    <img class=" ing-fluid sidebar-icon icon" src="assets/images/svg/megaphone.svg" alt="megaphone">
                    <h3>New Broadcast</h3>
                </a>
            </li>
            <li>
                <a href="call.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="phone-add"> </i>
                    <h3>New Calls</h3>
                </a>
            </li>
            <li>
                <a href="starred-message.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="star"> </i>

                    <h3>Starred Message</h3>
                </a>
            </li>

            <li>
                <a href="add-chat-contact.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="user-1-square"> </i>
                    <h3>Add New Contact</h3>
                </a>
            </li>
            <li>
                <a href="invite-friend.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="add-square"> </i>
                    <h3>Invite Friend</h3>
                </a>
            </li>

            <li>
                <a href="page-listing.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="book-closed"> </i>
                    <h3>template Pages</h3>
                </a>
            </li>

            <li>
                <a href="components-page.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="document-text-1"> </i>
                    <h3>template Components</h3>
                </a>
            </li>
            <li>
                <a href="profile.html" class="pages">
                    <i class="iconsax sidebar-icon" data-icon="user-1"> </i>
                    <h3>Profile</h3>
                </a>
            </li>

            <li>
                <div class="pages">
                    <i class="iconsax sidebar-icon" data-icon="repeat"> </i>
                    <h3>RTL</h3>
                </div>
                <div class="switch-btn">
                    <input id="dir-switch" type="checkbox">
                </div>
            </li>

            <li>
                <div class="pages">
                    <i class="iconsax sidebar-icon" data-icon="brush-3"> </i>
                    <h3>Dark</h3>
                </div>
                <div class="switch-btn">
                    <input id="dark-switch" type="checkbox">
                </div>
            </li>
        </ul> --}}
        <div class="p-2">
            <h3>Filter Posts</h3>
            <div style="display: flex; flex-wrap: wrap; gap: 1px;">
                @foreach ($skills as $skill)
                    <a href="#"
                        style="word-break: break-word; white-space: nowrap; margin-right: 5px;font-size:14px;color:#01aa85">
                        {{ $skill->name }} <span class="text-dark">|</span>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="bottom-sidebar">
            <ul class="link-section">
                <li>
                    <a href="#" class="pages">
                        <i class="iconsax sidebar-icon" data-icon="nut"> </i>
                        <h3>Setting</h3>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"class="pages">
                        <i class="iconsax sidebar-icon" data-icon="logout-2"> </i>
                        <h3>Logout</h3>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- sidebar end -->
