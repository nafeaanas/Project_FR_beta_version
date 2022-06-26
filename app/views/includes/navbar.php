<nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: var(--bg-color);">
    <div class="container-fluid d-flex flex-row-reverse">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" id="logo" href="#">سياقة</a>
            <img src="<?php echo URLROOT; ?>/image/Logo.png" style="width: 10%;">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent" style="background-color: var(--bg-color);">
            <ul class="navbar-nav fw-bold fs-5 mx-auto d-flex flex-lg-row-reverse mb-2 mb-lg-0" id="">
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>#home">الرئيسية</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>#about">من نحن</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>#avantage">مزايا</a></li>
                <li class="nav-item"><a class="dropdown-item" href="<?php echo URLROOT; ?>#contact">اتصل بنا</a></li>
                <li class="nav-item d-none"><a class="dropdown-item" href="">المدونة</a></li>
                <?php 
                    if(!isset($_SESSION['user_id'])) 
                        echo '
                            <li class="nav-item"><a class="dropdown-item" href="'.URLROOT.'/SignIn">تسجيل الدخول</a></li>
                        ';
                    elseif(isset($_SESSION['user_id']))
                        echo '
                            <li class="nav-item"><a class="dropdown-item" href="'.URLROOT.'/Cours">الدروس</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="'.URLROOT.'/Tests">اختبار</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="'.URLROOT.'/SignIn/logout">تسجيل الخروج</a></li>
                        ';
                    if(isset($_SESSION['user_id'])){
                        if($_SESSION['role'] == 'admin')
                            echo '
                                <li class="nav-item"><a class="dropdown-item" href="'.URLROOT.'/Dashboard">لوحة التحكم</a></li>
                            ';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>