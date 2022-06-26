<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <?php require APPROOT . '/views/includes/sidbar.php'; ?>
    
    <!-- Statistique -->
    <div class="col-md-10 col-sm-9 col-8">
    <div style="height: 10vh;"></div>
        <div class="d-flex flex-wrap justify-content-center gap-5">
            <div class="card col-md-3 col-sm-5 col-10 border-0" id="user">
                <div class="card-body">
                    <h1 class="card-title">User</h1>
                    <h1 class="card-text float-end"><?php echo $data['numberuser']; ?></h1>
                </div>
            </div>
            <div class="card col-md-3 col-sm-5 col-10 border-0" id="cour">
                <div class="card-body">
                    <h1 class="card-title">Cours</h1>
                    <h1 class="card-text float-end"><?php echo $data['numbercour']; ?></h1>
                </div>
            </div>
            <div class="card col-md-3 col-sm-5 col-10 border-0" id="question">
                <div class="card-body">
                    <h1 class="card-title">Questions</h1>
                    <h1 class="card-text float-end"><?php echo $data['numberquestion']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>

<style>
    .card{
        color: var(--2nd-main-color);
        box-shadow: 1px 1px var(--main-color), -0.5em 0 .2em var(--main-color);
    }
    .card:hover{
        color: var(--main-color);
        box-shadow: 3px 3px var(--main-color), -1em 0 .4em var(--main-color);
    }
</style>