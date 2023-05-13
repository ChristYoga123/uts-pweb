<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"] ?></title>

    <!-- === Icon === -->
    <link rel="icon" href="<?= URL; ?>/assets/img/bwa.svg">

    <!-- === Style === -->
    <link rel="stylesheet" href="<?= URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="d-flex gap-5">
        <img src="https://buildwithangga.com/themes/front/images/banner_login_1.png" width="400px">
        <div class="my-auto">
            <img src="<?= URL; ?>/assets/img/bwa.svg" class="rounded-full mb-5" width="50px">
            <h3 class="mb-4"><strong>New Account</strong></h3>
            <p class="lh-1 mb-5"><small>Lengkapi form di bawah dengan <br> menggunakan data Anda yang valid</small></p>
            <div class="input-field rounded-5 p-4 bg-white" style="width: 500px;">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama (maks. 50 karakter)</label>
                        <input type="text" class="form-control" id="nama">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <button class="btn btn-primary btn-lg fs-6 rounded-5">Continue</button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>