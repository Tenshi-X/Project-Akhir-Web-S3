<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/SeSa Catering.png">
</head>

<body style="background-color:  rgb(22, 33, 62); font-family: serif;">

    <center class="text-light formMargin" style="margin-top: 50px; padding: 50px; margin-left: 100px; margin-right: 100px">
        <h2>
            REGISTER
        </h2>
        <hr>
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == "register_fail") {
                echo "Registrasi Gagal.";
            }
        }
        ?>
        <br>
        <br>
        <form method="post" action="registerProcess.php">
            <div class="form-floating formMargin">
                <input type="text" class="form-control text-black" name="username" placeholder="Username" required="">
                <label class="fs-6 text-black">Username</label>
            </div>
            <div class="mb-3 mt-3 form-floating formMargin">
                <input type="password" class="form-control text-black" name="password" placeholder="Password" required="">
                <label class="fs-6 text-black">Password</label>
            </div>
            <div class="mb-3 mt-3 form-floating formMargin">
                <input type="text" class="form-control text-black" name="no_hp" placeholder="Nomor Handphone" required="">
                <label class="fs-6 text-black">Nomor Handphone</label>
            </div>
            <div class="mb-3 mt-3 form-floating formMargin">
                <input type="text" class="form-control text-black" name="alamat" placeholder="Alamat" required="">
                <label class="fs-6 text-black">Alamat</label>
            </div>
            <br>
            <div class="formMargin">
                <button style="width: 30%; background-color: rgb(22, 33, 62)" type="submit" class="btn btn-dark" name="" value="REGISTER">REGISTER</button>
            </div>
        </form>
        <br>
        Sudah punya akun?
        <a href="loginPage.php" class="text-light">Klik di sini.</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>