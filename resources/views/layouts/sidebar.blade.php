 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#components-nav"
                data-bs-toggle="collapse"
                href="#"
            >
                <i class="bi bi-menu-button-wide"></i>
                <span>Leads</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('viewleads') }}">
                        <i class="bi bi-circle"></i>
                        <span>Lead</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('lead.index') }}">
                        <i class="bi bi-circle"></i>
                        <span>Add Lead</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Components Nav -->
        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#forms-nav"
                data-bs-toggle="collapse"
                href="#"
            >
                <i class="bi bi-journal-text"></i>
                <span>Hotels</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('location') }}">
                        <i class="bi bi-circle"></i>
                        <span>Add Hotels</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Forms Nav -->
        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#tables-nav"
                data-bs-toggle="collapse"
                href="#"
            >
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Location</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('location.list') }}">
                        <i class="bi bi-circle"></i>
                        <span>Location</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('lead.location') }}">
                        <i class="bi bi-circle"></i>
                        <span>Add Location</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#charts-nav"
                data-bs-toggle="collapse"
                href="#"
            >
                <i class="bi bi-bar-chart"></i>
                <span>Rooms</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i>
                        <span>Rooms</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('room.create') }}">
                        <i class="bi bi-circle"></i>
                        <span>Add Rooms</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Charts Nav -->
        <li class="nav-item">
            <a
                class="nav-link collapsed"
                data-bs-target="#icons-nav"
                data-bs-toggle="collapse"
                href="#"
            >
                <i class="bi bi-gem"></i>
                <span>Accomadation Voucher</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i>
                        <span>Accomadation Voucher</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i>
                        <span>Add Accomadation Voucher</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Icons Nav -->

    </ul>
</aside>
<!-- End Sidebar-->
