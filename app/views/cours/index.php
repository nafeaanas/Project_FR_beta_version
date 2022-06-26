<?php require APPROOT . '/views/includes/header.php'; ?>

<body>
    <!-- NavBar -->
    <?php require APPROOT . '/views/includes/navbar.php'; ?>
    <div style="height: 15vh;"></div>
    <!-- Cours -->
    <div id="cours">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 mb-5" style="width: 100%; min-height: 85vh;">
            <?php for ($i=0; $i<9 ; $i++) {?>
                <div class="card col-lg-3 col-md-5 col-10 p-4 shadow border-0">
                    <img src="<?php echo URLROOT; ?>/image/Taking_notes-amico.png" class="card-img-top">
                    <div class="card-body text-center">
                        <p class="card-title h2 fw-bold" style="color: var(--main-color);"> العلامات الطرقية</p>
                        <p class="card-text h4">في هذا الدرس سنتعرف على جميع العلامات الطرقية</p>
                        <a href="<?php echo URLROOT; ?>/Cour" class="btn d-flex justify-content-center mt-3" style="width: 50%; margin-left: 25%;">اكتشف الآن</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>