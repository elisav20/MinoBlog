<div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="sidebar__header">
            <a class="navbar-brand px-3" href="?module=default&action=main">
                <img src="../assets/img/header__logo.png" alt="logo">
            </a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($_GET['module'] == 'default'){echo ' active';}?>">
                <a href="?module=default&action=main" class="nav-link">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php if ($_GET['module'] == 'users'){echo ' active';}?>">
                <a href="?module=users&action=read" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item <?php if ($_GET['module'] == 'posts'){echo ' active';}?>">
                <a href="?module=posts&action=read" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    <span>Posts</span>
                </a>
            </li>
            <li class="nav-item mb-auto <?php if ($_GET['module'] == 'categories'){echo ' active';}?>">
                <a href="?module=categories&action=read" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="?module=authorization&action=logout" class="nav-link" id="exit_btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Exit</span>
                </a>
            </li>
        </ul>
    </div>