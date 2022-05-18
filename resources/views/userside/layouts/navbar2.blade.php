<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
    data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand"
                    href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo"></span>
                    <img src="{{ asset('/front/images/abadkar-logo.png') }}" width="165px;"></a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name fw-bolder">{{ Auth::guard('customeruser')->user()->firstname }}</span><span
                            class="user-status">User</span></div><span class="avatar">
                        @if (Auth::guard('customeruser')->user()->image != null)
                            <img src="{{ URL::asset('assets/images/userphoto/' . Auth::guard('customeruser')->user()->image ?? '') }}"
                            width="40" height="40" alt="">@else<img src="{{ URL::asset('/default/nodp.jpg') }}"
                                width="40" height="40" alt="">
                        @endif
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item"
                        href="{{ url('user/profile') }}"><i class="me-50" data-feather="user"></i>
                        Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50"
                            data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                            class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item"
                        href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item"
                        href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                        Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                            data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i
                            class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item"
                        href="{{ url('user/logout') }}"><i class="me-50" data-feather="power"></i>Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
@include('userside.layouts.script')