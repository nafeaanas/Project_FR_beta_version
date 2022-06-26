<div class="col-md-2 col-sm-3 col-4 shadow" style="background-color: var(--main-color); color: var(--bg-color);">
    <h1 class="fw-bold text-center my-5" style=""><span style="color: var(--2nd-main-color);">SeY</span>a9a</h1>
    <div class="d-flex flex-column justify-content-center align-items-center gap-5">
        <div class="text-center">
            <h3 class="fw-bold">
                <?php if(isset($_SESSION['user_id']))echo $_SESSION["last_name"].' '.$_SESSION["first_name"] ?>
            </h3>
        </div>
        <ul class="navbar-nav w-100 h4 text-center d-flex flex-column gap-3">
            <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>" style="color: var(--bg-color);">View Site</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/Dashboard" style="color: var(--bg-color);">Dashboard</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/DashboardUsers" style="color: var(--bg-color);">Users</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/DashboardCours" style="color: var(--bg-color);">Cours</a></li>
            <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>/DashboardQuestions" style="color: var(--bg-color);">Questions</a></li>
        </ul>
        <div class="h4"><a class="dropdown-item" href="<?php echo URLROOT; ?>/SignIn/logout" style="color: var(--bg-color);">Logout</a></div>
    </div>
</div>