<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
            <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
            <span class="brand-copy">
                <span class="brand-title">adminHMD</span>
                <span class="brand-subtitle">Admin Template</span>
            </span>
        </a>
    </div>

    <nav class="sidebar-nav">

        <div class="sidebar-user">
            <img class="avatar-img avatar-md sidebar-user-avatar" src="../assets/images/avatar/avatar.jpg"
                alt="Admin Hasan">
            <strong>Admin Hasan</strong>
            <small>Active Workspace</small>
        </div>

        <a class="nav-link active"  href="{{ route('dashboard') }}" aria-current="page">
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text"> Dashboard</span>
        </a>

        <a class="nav-link" href="#coursesSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="coursesSubmenu">
            <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <span class="nav-text">Courses</span>
        </a>
        <div class="collapse" id="coursesSubmenu">
            <a class="nav-link" href="{{ route('categories.index') }}">
                <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-text">Categories</span>
            </a>
            <a class="nav-link" href="{{ route("courses.index") }}">
                <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-text">Courses List</span>
            </a>
        </div>

        <a class="nav-link" href="add-user.html">
            <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
            <span class="nav-text">Students</span>
        </a>

        <a class="nav-link" href="profile.html">
            <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
            <span class="nav-text">Booking</span>
        </a>

    </nav>

    <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
    </div>
</aside>
