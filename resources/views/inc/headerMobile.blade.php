<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ url('/') }}">
                    BTS
                    <!-- <img src="images/icon/logo.png" alt="CoolAdmin" /> -->
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="active has-sub">
                    <a class="js-arrow" href="/dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>

                <li>
                    <a href="/admin/passengers"><i class="fas fa-users"></i>Passengers</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-file-alt"></i>Tickets
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/admin/tickets/newTicket"></i>New Ticket</a>
                        </li>
                        <li>
                            <a href="/admin/tickets"></i>All Tickets</a>
                        </li>
                    </ul>
                </li>
                @if (Auth::user()->hasRole('Admin')==1)
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Staffs
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/admin/staffs/addStaff"></i>Add new</a>
                        </li>
                        <li>
                            <a href="/admin/staffs"></i>View All</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-bus"></i>Bus Management
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/admin/busses/addBus"></i>Add new</a>
                        </li>
                        <li>
                            <a href="/admin/busses"></i>View All</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-road"></i>Route Details
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="/admin/routes/addRoute">Add new</a>
                        </li>
                        <li>
                            <a href="/admin/routes">View All</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
