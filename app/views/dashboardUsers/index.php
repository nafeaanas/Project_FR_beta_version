<?php require APPROOT . '/views/includes/header.php'; ?>

<body class="row d-flex" style="height: 100vh;">
    <!-- Asidbar -->
    <?php require APPROOT . '/views/includes/sidbar.php'; ?>

    <!-- Statistique -->
    <div class="col-md-10 col-sm-9 col-8">
        <div style="height: 10vh;"></div>
        <div class="d-flex align-items-center justify-content-between mx-3">
            <h1 class="fw-bold" style="color: var(--2nd-main-color);">User</h1>
            <button type="button" class="border-0 rounded px-4 py-1" style="background-color: var(--main-color); color: var(--bg-color);" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-plus h3"></i></button>
        </div>
        <div class="d-flex justify-content-center" style=" overflow-x: auto;">
            <table class="table table-striped align-items-center justify-content-center mb-0 text-center" style="min-width: 600px;">
                <thead>
                    <tr>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">First Name</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Last Name</th>
                      <th class="col-4 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Email</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['users'] as $user) : ?>
                        <tr class="item">
                          <td class="d-none id"><?php echo $user->id ;?></td>
                          <td class="col-3 first_name"><?php echo $user->first_name ;?></td>
                          <td class="col-3 last_name"><?php echo $user->last_name ;?></td>
                          <td class="col-4 email"><?php echo $user->email ;?></td>
                          <td class="col-2 h5">
                            <a class="btn-edit" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="color: var(--main-color);"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?php echo URLROOT; ?>/DashboardUsers/delet?id=<?php echo $user->id ;?>" style="color: var(--main-color);"><i class="bi bi-trash"></i></a>
                          </td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title float-end" id="exampleModalLabel">اضافة حساب جديد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row d-flex justify-content-center align-items-center gap-4" method="POST" action="<?php echo URLROOT; ?>/DashboardUsers/add">
                    <div class="col-11 d-flex flex-row-reverse justify-content-center gap-3">
                        <input class="col-6 pe-3" name="first_name" type="text" placeholder="الاسم الشخصي">
                        <input class="col-6 pe-3" name="last_name" type="text" placeholder="الاسم العائلي">
                    </div>
                    <input class="col-11 pe-3" name="email" type="text" placeholder="البريد الإلكتروني">
                    <input class="col-11 pe-3" name="password" type="password" placeholder="كلمة السر">
                    <input class="col-11 pe-3" name="conf_password" type="password" placeholder="تأكيد كلمة السر">
                    <button type="submit" class="col-11 border-0" style="height: 60px; border-radius: 10px; background-color: var(--main-color); color: var(--bg-color);"> اضافة حساب جديد</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> تعديل الحساب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row d-flex justify-content-center align-items-center gap-4" method="POST" action="<?php echo URLROOT; ?>/DashboardUsers/edit">
                        <input class="d-none  pe-3 id" name="id" type="text">
                        <div class="col-11 d-flex flex-row-reverse justify-content-center gap-3">
                            <input class="col-6 pe-3 first_name" name="first_name" type="text" placeholder="الاسم الشخصي">
                            <input class="col-6 pe-3 last_name" name="last_name" type="text" placeholder="الاسم العائلي">
                        </div>
                        <input class="col-11 pe-3 email" name="email" type="text" placeholder="البريد الإلكتروني">
                        <button type="submit" class="col-11 border-0" style="height: 60px; border-radius: 10px; background-color: var(--main-color); color: var(--bg-color);"> تعديل على الحساب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require APPROOT . '/views/includes/footer2.php'; ?>


<!-- Edite User -->
<script>
    document.querySelectorAll('.btn-edit').forEach(function(btn){
        btn.addEventListener('click',function(event){
            let select = event.target.closest('.item');
            let id = select.querySelector('.id').innerHTML;
            let first_name = select.querySelector('.first_name').innerHTML;
            let last_name = select.querySelector('.last_name').innerHTML;
            let email = select.querySelector('.email').innerHTML;

            document.querySelector('#exampleModal2 .id').value = id;
            document.querySelector('#exampleModal2 .first_name').value = first_name;
            document.querySelector('#exampleModal2 .last_name').value = last_name;
            document.querySelector('#exampleModal2 .email').value = email;
        })
    })
</script>