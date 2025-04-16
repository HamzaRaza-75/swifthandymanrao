<div class="header">
    <div class="header-left">
        <a href="{{route('admindashboard.index')}}" class="logo">
            <img src="{{ url('/') }}/public/dasassets/img/logo.png" width="38" height="35" alt="">
            <span style="font-size: 14px;">RNMC Hospital</span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><img src="{{ url('/') }}/public/dasassets/img/icons/bar-icon.svg"
            alt=""></a>
    <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img
            src="{{ url('/') }}/public/dasassets/img/icons/bar-icon.svg" alt=""></a>

    <ul class="nav user-menu float-end">
        <li class="nav-item dropdown has-arrow user-profile-list">
            <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                <div class="user-names">
                    <h5>{{ Auth::user()->name }} </h5>
                    <span>Admin</span>
                </div>
                <span class="user-img">
                    <img src="{{ url('/') }}/public/dasassets/img/user-06.jpg" alt="Admin">
                </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/') }}/admin/profile">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

    <div class="dropdown mobile-user-menu float-end">
        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="fa-solid fa-ellipsis-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="{{ url('/') }}/admin/profile">Edit Profile</a>


            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

</div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a class="{{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('/admin/dashboard') }}">
                        <span class="menu-side"><img
                                src="{{ url('/') }}/public/dasassets/img/icons/menu-icon-01.svg"
                                alt=""></span>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Slip Url Sidebar --}}

                <li class="submenu">
                    <a href="#"><span class="menu-side"><img
                                src="{{ url('/') }}/public/dasassets/img/icons/menu-icon-15.svg"
                                alt=""></span> <span> Token </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->is('admin/slip') ? 'active' : '' }} {{ request()->routeIs('slip.show') ? 'active' : '' }}"
                                href="{{ url('admin/slip') }}">Token List</a></li>
                    </ul>
                </li>

                {{-- Slip url sidebar end --}}



                {{-- Doctors Url Sidebar --}}
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img
                                src="{{ url('/') }}/public/dasassets/img/icons/menu-icon-08.svg"
                                alt=""></span> <span> Doctors </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->is('admin/doctors') ? 'active' : '' }} {{ request()->routeIs('doctors.edit') ? 'active' : '' }}"
                                href="{{ url('/admin/doctors') }}">Doctor List</a></li>
                        <li><a class="{{ request()->is('admin/doctors/create') ? 'active' : '' }}"
                                href="{{ url('admin/doctors/create') }}">Add Doctor</a></li>
                    </ul>
                </li>
                {{-- Doctors url sidebar end --}}

                {{-- Pharmacy Url Sidebar --}}

                {{-- <li class="submenu">
                    <a href="#"><span class="menu-side"><img
                                src="{{ url('/') }}/public/dasassets/img/icons/menu-icon-03.svg"
                                alt=""></span> <span> Pharmacy </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->is('admin/pharmacy') ? 'active' : '' }} {{ request()->routeIs('pharmacy.edit') ? 'active' : '' }}"
                                href="{{ url('admin/pharmacy') }}">Medicine List</a></li>

                        <li><a class="{{ request()->is('admin/pharmacy/create') ? 'active' : '' }}"
                                href="{{ url('admin/pharmacy/create') }}">Add Medicine</a></li>

                        <li><a class="{{ request()->is('admin/add-purchase-stock') ? 'active' : '' }}"
                                href="{{ url('admin/add-purchase-stock') }}">Add Purchase Stock</a></li>
                    </ul>
                </li> --}}

                {{-- Pharmacy url sidebar end --}}

                {{-- SlipCategory Url Sidebar --}}

                <li class="submenu">
                    <a href="#"><span class="menu-side"><img
                                src="{{ url('/') }}/public/dasassets/img/icons/category.svg"
                                alt=""></span> <span> Token Category </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->is('admin/slipcategory') ? 'active' : '' }} {{ request()->routeIs('slipcategory.edit') ? 'active' : '' }}"
                                href="{{ url('admin/slipcategory') }}">TokenCategory List</a></li>

                        <li><a class="{{ request()->is('admin/slipcategory/create') ? 'active' : '' }}"
                                href="{{ url('admin/slipcategory/create') }}">Add TokenCategory</a></li>
                    </ul>
                </li>

                {{-- SlipCategory url sidebar end --}}

                <li class="submenu">
                    <a href="#"><span class="menu-side"><img
                                src="{{ url('/') }}/public/dasassets/img/icons/menu-icon-06.svg"
                                alt=""></span> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->is('admin/token-reports') ? 'active' : '' }} "
                                href="{{ url('admin/token-reports') }}">Token Reports</a></li>
                        {{-- <li><a class="{{ request()->is('admin/superadmin/reports') ? 'active' : '' }}"
                                href="{{ url('/#') }}">Admin Reports</a></li>
                        <li><a class="{{ request()->is('admin/customer/reports') ? 'active' : '' }}"
                                href="{{ url('/#') }}">Customer Reports</a></li>
                        <li><a href="edit-department.html">Edit Department</a></li> --}}
                    </ul>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><span
                            class="menu-side"><img src="{{ url('/') }}/public/dasassets/img/icons/logout.svg"
                                alt=""></span> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
