<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <?php require APPROOT . '/views/includes/sidbar.php'; ?>

    <!-- Statistique -->
    <div class="col-md-10 col-sm-9 col-8">
        <div style="height: 10vh;"></div>
        <h1 class="fw-bold" style="color: var(--2nd-main-color);">Cours</h1>
        <div class="d-flex justify-content-center" style=" overflow-x: auto;">
            <table class="table table-striped align-items-center justify-content-center mb-0 text-center" style="min-width: 600px;">
                <thead>
                    <tr>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Image</th>
                      <th class="col-6 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['cours'] as $cour) : ?>
                        <tr class="item">
                          <td class="col-3"><?php echo $cour->name ;?></td>
                          <td class="col-3"><img class="w-25" src="<?php echo URLROOT.'/image/'.$cour->image?>"></td>
                          <td class="col-6"><?php echo $cour->description ;?></td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>