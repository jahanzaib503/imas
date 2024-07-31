<div class="sidebar-wrapper" data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                    <div class="simplebar-content" style="padding: 0px;">
                        <div class="sidebar-header" style="height:75px!important;">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/Imas_white.png') }}" alt="">
                            </div>
                        </div>
                        <!--navigation-->
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="{{ Request::is('admin/dashboard') ? ' active' : '' }}">
                                    <div class="parent-icon"><i class="fa-solid fa-table-list"></i>
                                    </div>
                                    <div class="menu-title">Dashboard</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.calendar') }}" class="{{ Request::is('admin/calendar') ? ' active' : '' }}">
                                    <div class="parent-icon"><i class="fa-solid fa-table-list"></i>
                                    </div>
                                    <div class="menu-title">Calendar</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.bookings') }}" class="{{ Request::is('admin/bookings') ? ' active' : '' }}">
                                    <div class="parent-icon"><i class="fa-solid fa-table-list"></i>
                                    </div>
                                    <div class="menu-title">Bookings</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.inquiries') }}" class="{{ Request::is('admin/inquiries') ? ' active' : '' }}">
                                    <div class="parent-icon"><i class="fa-solid fa-table-list"></i>
                                    </div>
                                    <div class="menu-title">Inquiries</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blogs') }}" class="{{ Request::is('admin/blogs') ? ' active' : '' }}">
                                    <div class="parent-icon"><i class="fa-solid fa-table-list"></i>
                                    </div>
                                    <div class="menu-title">Blogs</div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
