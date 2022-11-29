<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/SeSa Catering.png">
</head>

<body style="background-color:  rgb(22, 33, 62); font-family: serif;">
    <center class="margin text-light formMargin" style="margin-top: 100px; padding: 50px; margin-left: 400px; margin-right: 400px">
        <h2>
            LOGIN
        </h2>
        <hr>
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == "gagal") {
                echo "Login Gagal. Username atau Password Salah";
            } elseif ($_GET['message'] == "logout") {
                echo "Anda telah berhasil logout";
            } elseif ($_GET['message'] == "belum_login") {
                echo "Anda harus login terlebih dahulu untuk masuk";
            } else if ($_GET['message'] == "register_success") {
                echo "Registrasi Berhasil.";
            }
        }
        ?>
        <br>
        <br>
        <form method="post" action="loginProcess.php">
            <div class="form-floating formMargin">
                <input type="text" class="form-control text-black" name="username" placeholder="Username" required="">
                <label class="fs-6 text-black">Username</label>
            </div>
            <div class="mb-3 mt-3 form-floating formMargin">
                <input type="password" class="form-control text-black" name="password" placeholder="Password" required="">
                <label class="fs-6 text-black">Password</label>
            </div>
            <br>
            <div class="formMargin">
                <button style="width: 100%; background-color: rgb(22, 33, 62) " type="submit" class="btn btn-dark" name="" value="LOGIN">LOGIN</button>
            </div>
        </form>
        <br>
        Belum punya akun?
        <a href="registerPage.php" class="text-light">Daftar di sini.</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>