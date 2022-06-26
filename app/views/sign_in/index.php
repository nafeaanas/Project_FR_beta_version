<?php require APPROOT . '/views/includes/header.php'; ?>

<body style="overflow: hidden;">
    <div class="d-flex justify-content-between align-items-center" id="signup">
        <img id="pg_signup" src="<?php echo URLROOT; ?>/image/signin.png">
        <div class="row d-flex justify-content-between align-items-center position-absolute top-0 vh-100">
            <div class="col-7 d-md-flex d-none justify-content-center align-items-center"><img style="width: 60%;" src="<?php echo URLROOT; ?>/image/Computer_login-amico.png"></div>
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center gap-2 px-5 text-center">
                <h2 class="fw-bold" style="color: var(--2nd-main-color);">سجل دخولك</h2>
                <div class="d-flex flex-wrap flex-row-reverse gap-2"><h4 style="color: var(--bg-color);">الا تمتلك حسابا ؟</h4><h4><a style="color: var(--2nd-main-color);" class="text-decoration-none" href="<?php echo URLROOT; ?>/SignUp">انشاء حساب</a></h4></div>
                <button style="width: 95%; height: 65px; border-radius: 10px; background-color: var(--main-color2); border: none; color: var(--bg-color);"> <img class="me-2" src="<?php echo URLROOT; ?>/image/Group_187.png">انشاء باستخدام</button>
                <h5 style="color: var(--bg-color);">او</h5>
                <?php if(isset($data['error'])) echo '
                    <div class="alert alert-primary col-11 text-danger h4" role="alert">'.$data['error'].'</div>
                '?>
                <form class="row d-flex justify-content-center align-items-center gap-4" method="POST" action="<?php echo URLROOT; ?>/SignIn/signin">
                    <input class="col-11 pe-3" name="email" type="text" placeholder="البريد الإلكتروني">
                    <input class="col-11 pe-3" name="password" type="password" placeholder="كلمة السر">
                    <p class="ps-4 mb-0" style="color: var(--2nd-main-color); text-align:left;">هل نسيت كلمة السر ؟</p>
                    <button type="submit" class="col-11 border-0" style="height: 60px; border-radius: 10px; background-color: var(--2nd-main-color); color: var(--bg-color);">تسجيل الدخول</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>