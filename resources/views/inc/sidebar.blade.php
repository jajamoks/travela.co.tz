<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/">
            <h4>Bus Ticketing System</h4>
            <!-- <img src="images/icon/logo.png" alt="{{ config('app.name')}}" /> -->
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="/dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin/customer"><i class="fas fa-users"></i>Customers</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-file-alt"></i>Tickets
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/admin/tickets/new_ticket">
                                <i class="fas fa-plus"></i>Add new</a>
                        </li>
                        <li>
                            <a href="/admin/tickets">
                              <i class="fas fa-check-square"></i>All Tickets
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Agents
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/admin/agents/add_agent">
                                <i class="fas fa-plus"></i>Add new</a>
                        </li>
                        <li>
                            <a href="/admin/agents">
                                <i class="far fa-check-square"></i>View All</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-bus"></i>Bus Management
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/admin/busses/add_bus">
                                <i class="fas fa-plus"></i>Add new</a>
                        </li>
                        <li>
                            <a href="/admin/busses">
                                <i class="far fa-check-square"></i>View All</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-road"></i>Route Details
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/admin/routes/add_route">
                                <i class="fas fa-plus"></i>Add new</a>
                        </li>
                        <li>
                            <a href="/admin/routes">
                                <i class="far fa-check-square"></i>View All</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
