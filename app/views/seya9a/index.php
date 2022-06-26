<?php require APPROOT . '/views/includes/header.php'; ?>

<body>
    <!-- NavBar -->
    <?php require APPROOT . '/views/includes/navbar.php'; ?>
    <!-- Home -->
    <div class="my-5" id="home">
        <div style="height: 15vh;"></div>
        <!-- Home -->
        <div class="row d-flex flex-wrap justify-content-center align-items-center gap-4" id="home2">
            <div class="col-md-6 col-11 d-flex justify-content-center align-items-center">
                <img class="w-75" src="<?php echo URLROOT; ?>/image/Main_img.png">
            </div>
            <div class="col-md-5 col-11 text-center d-flex flex-column justify-content-center align-items-center">
                <div class="h3 fw-bold">ناخذ بيدك خطوة بخطوة لاجتياز اختبار السياقة هدفنا ان تحصل على رخصة </div>
                <div class="d-flex flex-row-reverse">
                    <div class="h3 fw-bold" style="color: var(--main-color);">ابدأ من هنا</div>
                    <img src="<?php echo URLROOT; ?>/image/start.png">
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        echo'<a class="btn d-flex align-items-center justify-content-center" href="'.URLROOT.'/SignUp" class="btn">انشاء حساب</a>';
                    }
                    elseif(isset($_SESSION['user_id'])){
                        echo'<a class="btn d-flex align-items-center justify-content-center" href="'.URLROOT.'/Cours" class="btn">الدروس</a>';
                    }
                ?>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center gap-5 mt-5" id="statistique">
            <div class="card col-lg-2 col-md-5 col-sm-8 col-10 shadow d-flex justify-content-between align-items-center p-2">
                <div class="fas fa-graduation-cap icon"></div>
                <div class="d-flex align-items-center">
                    <strong class="h3">95+</strong>
                    <h5>درس و اختبار</h5>
                </div>
            </div>
            <div class="card col-lg-2 col-md-5 col-sm-8 col-10 shadow d-flex justify-content-between align-items-center p-2">
                <div class="fas fa-user-graduate icon"></div>
                <div class="d-flex align-items-center">
                    <strong class="h3">1400+</strong>
                    <h5>مستعمل</h5>
                </div>
            </div>
            <div class="card col-lg-2 col-md-5 col-sm-8 col-10 shadow d-flex justify-content-between align-items-center p-2">
                <div class="fas fa-chalkboard-user icon"></div>
                <div class="d-flex align-items-center">
                    <strong class="h3">80+</strong>
                    <h5>مؤسسة</h5>
                </div>
            </div>
            <div class="card col-lg-2 col-md-5 col-sm-8 col-10 shadow d-flex justify-content-between align-items-center p-2">
                <div class="fas fa-face-smile icon"></div>
                <div class="d-flex align-items-center">
                    <strong class="h3">100%</strong>
                    <h5>نسبة الاستفادة</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="d-flex flex-column justify-content-center gap-4 my-5" id="about">
        <div class="h1 text-center fw-bold">
            <span>من</span>
            <span style="color: var(--main-color);">نحن</span>
            <img src="<?php echo URLROOT; ?>/image/about.svg" style="width: 5%;">
        </div>
        <div style="width: 60%; margin-left: 20%;">
            <div><img src="<?php echo URLROOT; ?>/image/Group_507.png" style="width: 8%; float: right;"></div>
            <div class="text-center h3 mt-5 px-5">
                    هدفنا توفير  منصة مجانية تعمل بكفاءة عالية ذات واجهة مريحه سهلة الاستخدام
                    لتحسين إنتاجيتك في اختبار السياقة و حصولك على رخصة السياقة بكل اربحية
                    ستجد هنا دروس معتمدة و اختبارات مطروحة بطريقة ممتعة 
            </div>  
            <div><img src="<?php echo URLROOT; ?>/image/Group_507.png" style="width: 8%; transform: rotate(180deg);"></div>
        </div>
    </div>
    <!-- Avantages -->
    <div class="my-5" id="avantage">
        <div class="h1 text-center fw-bold">
            <span>مزايا</span>
            <img src="<?php echo URLROOT; ?>/image/features.png" style="width: 5%;">
        </div>
        <div id="cards_avantage" class="d-flex flex-wrap justify-content-center gap-5 mt-5">
            <div class="card col-lg-3 col-md-5 col-10 p-4 shadow border-0">
                <img src="<?php echo URLROOT; ?>/image/Blog_post-amico.png" class="card-img-top">
                <div class="card-body">
                    <p class="card-text h4 text-center">سياقة توفر أيضا مدونة تحتوي على اخرالمستجدات والاخبار المتعلقة بقانون السير</p>
                    <a href="#" class="btn mt-3" style="width: 50%; margin-left: 25%;">اكتشف الآن</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-5 col-10 p-4 shadow border-0">
                <img src="<?php echo URLROOT; ?>/image/Online_test-amico.png" class="card-img-top">
                <div class="card-body">
                    <p class="card-text h4 text-center">ستجد هنا أيضا اختبارات مطروحة بطريقة ممتعة متعددة ومتجددة</p>
                    <a href="<?php echo URLROOT; ?>/Tests" class="btn mt-3" style="width: 50%; margin-left: 25%;">اكتشف الآن</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-5 col-10 p-4 shadow border-0">
                <img src="<?php echo URLROOT; ?>/image/Taking_notes-amico.png" class="card-img-top">
                <div class="card-body">
                    <p class="card-text h4 text-center">سياقة توفر مجموعة  من الدروس المعتمدة  الخاصة بتعليم السياقة</p>
                    <a href="<?php echo URLROOT; ?>/Cours" class="btn mt-3" style="width: 50%; margin-left: 25%;">اكتشف الآن</a>
                </div>
            </div>
        </div> 
    </div>
    <!-- Contact -->
    <div class="d-flex flex-column justify-content-center gap-4 my-5" id="contact">
        <div class="h1 text-center fw-bold">
            <span>اتصل</span>
            <span style="color: var(--main-color);">بنا</span>
            <img src="<?php echo URLROOT; ?>/image/contact.png" style="width: 5%;">
        </div>
        <div class="row d-sm-flex justify-content-center" style="width: 80%; margin-left: 10%;">
            <div class="col-md-6"><img style="width: 100%;" src="<?php echo URLROOT; ?>/image/Contact_us2x.png"></div>
            <div class="col-md-6 d-flex flex-column justify-content-center gap-4">
                <h2 class="col-12 text-center" style="text-align:right;">كيف يمكننا مساعدتك ؟</h2><br>
                <div class="col-12 d-flex">
                    <input class="pe-3" style="width: 45%; margin-right: 10%;" type="text" value="الاسم الشخصي">
                    <input class="pe-3" style="width: 45%;" type="text" value="الاسم العائلي">
                </div>
                <input class="pe-3" type="text" placeholder="البريد الإلكتروني">
                <textarea class="p-3" placeholder="...يمكنك ترك رسالتك هنا"></textarea>
                <button class="btn w-100" style="height: 60px; border-radius: 10px;">اكتشف الآن</button>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>