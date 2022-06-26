<?php require APPROOT . '/views/includes/header.php'; ?>

<body>
    <!-- NavBar -->
    <?php require APPROOT . '/views/includes/navbar.php'; ?>
    <div style="height: 10vh;"></div>
    <!-- Cours -->
    <div id="cours">
        <div class="row d-flex justify-content-center align-items-center p-3" style="width: 100%; min-height: 85vh;">
            <div class="col-10 rounded d-flex flex-column justify-content-center align-items-center gap-3 shadow" style="min-height: 85vh; background-color: var(--bg-color);">
                <!-- <img class="w-50" src="<?php //echo URLROOT; ?>/image/Group_510.png">
                <div class="row w-100 d-flex justify-content-center align-items-center gap-2">
                    <div class="col-1 h3 fw-bold">03:00</div>
                    <div id="question" class="col-9 text-center h2">السؤال 1</div>
                    <div class="col-1 h3 fw-bold">س1\3</div>
                </div>
                <div class="row w-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex justify-content-end align-items-center">
                        <label for="q1" class="h4">الاقتراح 1</label>
                        <input id="q1" type="checkbox">
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <label for="q1" class="h4">الاقتراح 2</label>
                        <input id="q1" type="checkbox">
                    </div>
                </div>
                <div>
                    <button id="suivant" class="btn w-100">التالي</button>
                </div> -->
                <div class="card" id="quiz">
                    <div class="card-header d-flex justify-content-around align-items-center">
                        <div class="fw-bold"><span id="cont">1</span>/<span id="NbrQests">22</span></div>
                        <div class="col-11" id="progress_bar">
                            <div id="progress_bar_etat"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="mt-4" id="question"></h4>
                        <div class="d-flex justify-content-center" id="choix" style="gap: 50px;"></div>
                        <div>
                            <button class="btn suivant" id="suivant" onclick="question_suivant()">Suivant</button>
                            <button class="btn precedent" id="precedent" onclick="question_precedent()">Precedent</button>
                            <button class="btn terminer_test" id="terminer_test" onclick="terminer_test()">Terminer le test</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/includes/footer.php'; ?>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>