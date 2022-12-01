<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:loginPage.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/SeSa Catering.png">
</head>

<body style="background-color:  rgb(22, 33, 62); font-family: serif;">
    <nav class="navbar navbar-expand-lg">
        <a href="homePage.php"><img src="assets/SeSa Catering.png" alt="logo SeSa.png" style="height: 80px; width: 80px; border-radius: 50%; margin-left: 10px;"></a>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 10px; margin-top: 5px; background-color: rgb(83, 52, 131); border-radius: 40px;">
                    <li class="nav-item">
                        <a class="nav-link active text-light" style=" margin-left: 25px; margin-right: 10px; font-size: large;" aria-current="page" href="homePage.php">
                            <iconify-icon icon="material-symbols:home" inline style="color: white; margin-left: 20%" width="20" height="20"></iconify-icon>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" style=" margin-right: 10px; font-size: large;" aria-current="page" href="menuPage.php">
                            <iconify-icon icon="ic:baseline-menu-book" inline style="color: white; margin-left: 20%" width="20" height="20"></iconify-icon>Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" style="font-size: large;" href="orderPage.php">
                            <iconify-icon inline icon="tabler:cup" style="color: white; margin-left: 20%" width="20" height="20"></iconify-icon>Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" style=" margin-right: 740px; font-size: large;" href="reservationPage.php">
                            <iconify-icon inline icon="icon-park-outline:transaction-order" style="color: white; margin-left: 30%" width="20" height="20"></iconify-icon>Reservation
                        </a>
                    </li>
                    <li class="nav-item">
                        <iconify-icon inline icon="material-symbols:person-outline" style="color: white; margin-top: 100%;" width="25" height="25"></iconify-icon>
                    </li>
                    <li class="nav-item text-light" style="margin-right: 40px; margin-top: 8px; margin-left: 2px; ">
                        <?php
                        include "connect.php";
                        $username = $_SESSION['username'];
                        ?>
                        Hey, <?= $username ?>
                    </li>
                </ul>
            </div>
        </div>
        <a href="logoutProcess.php" style="margin-right: 20px; margin-top: 5px;">
            <button type="button" class="btn btn-outline-danger">Logout</button>
        </a>
    </nav>
    <div class="containerBackground2 text-center" style="background-color: rgb(201, 150, 204); padding: 10px; height: 500px; width: 900px; margin-left:290px; ">
        <a href="orderPage.php">
            <button type="button" class="btn" style="color:  rgb(183, 62, 62); font-size: x-large; margin-right: 770px;">
                <iconify-icon inline icon="material-symbols:arrow-back-rounded" style="color: #b73e3e;" width="24" height="24"></iconify-icon>Back
            </button>
        </a>
        <?php
        include('connect.php');
        $user = $_SESSION['username'];
        $id_menu = $_GET['id_menu'];
        $sql    = "SELECT * FROM menu where id_menu=$id_menu";
        $sql_id = "SELECT * FROM user where username = '$user'";
        $query_id = mysqli_query($koneksi, $sql_id);
        $data_id = mysqli_fetch_array($query_id);
        $query    = mysqli_query($koneksi, $sql);
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <div class="containerFilly text-light text-center">
                <?= $data['nama_menu']; ?>
            </div>
            <form method="POST" action="orderProcess.php" style="margin-left: 20px;">
                <div>
                    <input type="hidden" id="id_user" name="id_user" class="form-control" value="<?= $data_id['id_user'] ?>">
                </div>
                <div>
                    <input type="hidden" id="id_menu" name="id_menu" class="form-control" value="<?= $data['id_menu'] ?>">
                </div>
                <div>
                    <input type="hidden" id="id_lauk" name="id_lauk" class="form-control" value="<?= $data['id_lauk'] ?>">
                </div>
            <?php } ?>
            <div class="row mt-3">
                <?php
                include 'connect.php';
                $user = $_SESSION['username'];
                ?>
            </div>
            <div class="row mt-3">
                <label class="col-2 col-form-label" style="border: 2px; border-color: black">Sayur :</label>
                <select name="id_sayur" style="background-color: white; margin-left: 1.5%" class="col-4 btn" data-bs-toggle="dropdown" required="" name="sayur">
                    <?php
                    include('connect.php');

                    $sql    = "SELECT * FROM sayur";
                    $query  = mysqli_query($koneksi, $sql);

                    while ($data = mysqli_fetch_array($query)) {

                    ?>
                        <option align="left" value=<?= $data['id_sayur']; ?>><?= $data['sayur']; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row mt-3">
                <label class="col-2 col-form-label" style="border: 2px; border-color: black">Minuman : </label>
                <select name="id_minuman" style="background-color: white; margin-left: 1.5%;" class="col-4 btn" data-bs-toggle="dropdown" required="">:
                    <?php
                    include('connect.php');

                    $sql    = "SELECT * FROM minuman";
                    $query  = mysqli_query($koneksi, $sql);

                    while ($data = mysqli_fetch_array($query)) {

                    ?>
                        <option align="left" value=<?= $data['id_minuman']; ?>><?= $data['minuman']; ?> </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row mt-3">
                <label class="col-2 col-form-label" style="border: 2px; border-color: black">Porsi : </label>
                <div class="col-5">
                    <input type="number" name="porsi" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <label class="col-2 col-form-label" style="border: 2px; border-color: black">Tanggal Acara : </label>
                <div class="col-5">
                    <input type="date" name="tgl_acara" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <label class="col-2 col-form-label" style="border: 2px; border-color: black">Waktu Acara : </label>
                <div class="col-5">
                    <input type="time" name="waktu_acara" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <button style="width: 55%; background-color:rgb(22, 33, 62); margin-left: 3%" type="submit" class="btn btn-outline-light buttonSize" value="ORDER">ORDER</button>
            </div>
            </form>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>