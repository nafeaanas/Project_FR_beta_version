<?php require APPROOT . '/views/includes/header.php'; ?>

<body style="overflow: hidden;">
    <div class="d-flex justify-content-between align-items-center" id="signup">
        <img id="pg_signup" src="<?php echo URLROOT; ?>/image/signup.png">
        <div class="row d-flex justify-content-between align-items-center position-absolute top-0 vh-100">
            <div class="col-7 d-md-flex d-none justify-content-center align-items-center"><img style="width: 60%;" src="<?php echo URLROOT; ?>/image/Group_186.png"></div>
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center gap-2 px-5 text-center">
                <h2 class="fw-bold" style="color: var(--main-color);"> انشاء حسابك</h2>
                <div class="d-flex flex-wrap flex-row-reverse gap-2"><h4 style="color: var(--bg-color);"> هل لديك حساب  بالفعل ؟ </h4><h4><a  style="color: var(--main-color);" class="text-decoration-none" href="<?php echo URLROOT; ?>/SignIn"> تسجيل الدخول </a></h4></div>
                <button style="width: 95%; height: 65px; border-radius: 10px; background-color: var(--text-color2); border: none; color: var(--main-color);"> <img class="me-2" src="<?php echo URLROOT; ?>/image/Group_187.png">انشاء باستخدام</button>
                <h5 style="color: var(--bg-color);">او</h5>
                <?php if(isset($data['error'])) echo '
                    <div class="alert alert-primary col-11 text-danger h4" role="alert">'.$data['error'].'</div>
                '?>
                <form class="row d-flex justify-content-center align-items-center gap-4" method="POST" action="<?php echo URLROOT; ?>/SignUp/signup">
                    <div class="col-11 d-flex flex-row-reverse justify-content-center gap-3">
                        <input class="col-6 pe-3" name="first_name" type="text" placeholder="الاسم الشخصي">
                        <input class="col-6 pe-3" name="last_name" type="text" placeholder="الاسم العائلي">
                    </div>
                    <input class="col-11 pe-3" name="email" type="text" placeholder="البريد الإلكتروني">
                    <input class="col-11 pe-3" name="password" type="password" placeholder="كلمة السر">
                    <input class="col-11 pe-3" name="conf_password" type="password" placeholder="تأكيد كلمة السر">
                    <button type="submit" class="col-11 border-0" style="height: 60px; border-radius: 10px; background-color: var(--main-color); color: var(--bg-color);">انشاء حساب</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>