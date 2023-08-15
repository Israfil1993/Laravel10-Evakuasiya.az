
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.index') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/backend') }}/images/156logo.png" alt="logo-sm" height="100">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('assets/backend') }}/images/156logo.png" alt="logo-dark" height="100">
                                </span>
                </a>

                <a href="{{ route('admin.index') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/backend') }}/images/156logo.png" alt="logo-sm-light" height="100">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('assets/backend') }}/images/156logo.png" alt="logo-light" height="100">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>
        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ (!empty( Auth::user()->image))? url('assets/backend/images/users/'. Auth::user()->image): url('uploads/default.jpg') }}"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile' ) }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button type="submit" form="logout-form" class="dropdown-item text-danger">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                    </button>                </div>
            </div>
        </div>
    </div>
</header>
