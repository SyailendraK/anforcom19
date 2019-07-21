<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anforcom 2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>login.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <section id="login" class="d-flex align-items-center">
        <div class="container form-login" align="center">
            <div id="logo--av">
                <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/'); ?>helmwkwk.png" alt="av" width="120px"></a>
            </div>
            <form action="<?= base_url(); ?>login" id="login-form" class="p-3" method="post" accept-charset="utf-8">
                <input type="hidden" name="csrf_test_name" value="8f01bdfbe16aaeee77643c21e012d9d1">                                       
                <div class="form-group" align="left">
                    <label for="">Email : </label>
                    <input autofocus="" required="" class="form-control field-login" type="email" name="email" value="">
                </div>
                <div class="form-group" align="left">
                    <label for="">Password : </label>
                    <input required="" class="form-control field-login" type="password" name="password">
                </div>
                <button class="btn btn-success loginbtn" type="submit" name="button">LOGIN</button>
                <div class="new-acc mt-3">
                    <p class="m-0">Lupa Password ? <a id="forget" href="forget">Reset Disini!</a><br>Belum Punya Akun ? <a href="register">Daftar Sekarang!</a></p>
                </div>
            </form>
        </div>
</section>

</body>

<script src="<?= base_url('assets/js/'); ?>jquery-3.3.1.slim.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>popper.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>bootstrap.min.js"></script>


</html>