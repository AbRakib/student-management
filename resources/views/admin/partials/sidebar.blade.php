<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">super Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Student Panel
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#studentMenu" aria-expanded="true" aria-controls="studentMenu">
            <i class="fas fa-user-graduate"></i>
            <span>Student Menu</span>
        </a>
        <div id="studentMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Students</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Active Student</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Pending Student</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Rejected Student</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Add Student</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Course Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#courseMenu" aria-expanded="true" aria-controls="courseMenu">
            <i class="fas fa-graduation-cap"></i>
            <span>Course Menu</span>
        </a>
        <div id="courseMenu" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Course Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Courses</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Active Course</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Pending Course</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Rejected Course</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Add Course</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Teacher Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#teacherMenu" aria-expanded="true" aria-controls="teacherMenu">
            <i class="fas fa-user-tag"></i>
            <span>Teacher Menu</span>
        </a>
        <div id="teacherMenu" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Teacher Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Teachers</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Active Teacher</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Pending Teacher</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Rejected Teacher</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Create Teacher</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Middle Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#educationMenu" aria-expanded="true" aria-controls="educationMenu">
            <i class="fas fa-book-reader"></i>
            <span>Education Menu</span>
        </a>
        <div id="educationMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Education Components:</h6>
                <a class="collapse-item" href="{{ route('admin.education.index') }}"><i class="fas fa-arrow-circle-right text-success"></i> Educations</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#genderMenu" aria-expanded="true" aria-controls="genderMenu">
            <i class="fas fa-venus-mars"></i>
            <span>Gender Menu</span>
        </a>
        <div id="genderMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gender Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Genders</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Create Gender</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Settings Panel
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminMenu" aria-expanded="true" aria-controls="adminMenu">
            <i class="fas fa-user-shield"></i>
            <span>Admin Menu</span>
        </a>
        <div id="adminMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Admins</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Create Admin</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#permissionMenu" aria-expanded="true" aria-controls="permissionMenu">
            <i class="fas fa-praying-hands"></i>
            <span>Permission Menu</span>
        </a>
        <div id="permissionMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Permission Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Permissions</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Create Permission</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#roleMenu" aria-expanded="true" aria-controls="roleMenu">
            <i class="fas fa-hat-cowboy"></i>
            <span>Role Menu</span>
        </a>
        <div id="roleMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Role Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Roles</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Create Role</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settingMenu" aria-expanded="true" aria-controls="settingMenu">
            <i class="fas fa-tools"></i>
            <span>Setting Menu</span>
        </a>
        <div id="settingMenu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting Components:</h6>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Settings</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Logo</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-arrow-circle-right text-success"></i> Meta Icon</a>
                <a class="collapse-item" href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Edit Setting</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('assets/img/undraw_rocket.svg') }}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="javascript:void(0);">Upgrade to Pro!</a>
    </div>
</ul>