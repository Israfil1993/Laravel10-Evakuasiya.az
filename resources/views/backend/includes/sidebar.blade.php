<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ (!empty( Auth::user()->image))? url('assets/backend/images/users/'. Auth::user()->image): url('uploads/default.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Əsas Səhifə</span>
                    </a>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Slaydlar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.slider.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.slider.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Partnyorlar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.partnyorlar.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.partnyorlar.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>FAQ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.faq.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.faq.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Haqqımızda</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.about.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.about.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Nəaliyyətlər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.statistics_counters.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.statistics_counters.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Xidmətlərimiz</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.our_services.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.our_services.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Müştəri Rəyləri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.testimonial.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.testimonial.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Korporativlər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.corporative.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.corporative.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Mesajlar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.contact.list') }}">Siyahı</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Xəbərlər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.post.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.post.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Karyera</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.vacancy.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.vacancy.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Cv</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.cv.list') }}">Siyahı</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Sifarişlər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.order.list') }}">Siyahı</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Seo</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.seo.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.seo.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-stack-fill"></i>
                        <span>Tənzimləmələr</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.setting.list') }}">Siyahı</a></li>
                        <li><a href="{{ route('admin.setting.create') }}">Əlavə Et</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>
