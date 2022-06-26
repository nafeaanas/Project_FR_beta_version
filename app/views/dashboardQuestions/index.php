<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <?php require APPROOT . '/views/includes/sidbar.php'; ?>

    <!-- Statistique -->
    <div class="col-md-10 col-sm-9 col-8">
        <div style="height: 10vh;"></div>
        <h1 class="fw-bold" style="color: var(--2nd-main-color);">Question</h1>
        <div class="d-flex justify-content-center" style=" overflow-x: auto;">
            <table class="table table-striped align-items-center justify-content-center mb-0 text-center" style="min-width: 600px;">
                <thead>
                    <tr>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Question</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Proposition</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Repondre</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['questions'] as $question) : ?>
                        <tr class="item">
                          <td class="col-3"><?php echo $question->question ;?></td>
                          <td class="col-3"><?php echo $question->proposition ;?></td>
                          <td class="col-3"><?php echo $question->repondre ;?></td>
                          <td class="col-3"><img class="w-25" src="<?php echo URLROOT.'/image/'.$question->image?>"></td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>