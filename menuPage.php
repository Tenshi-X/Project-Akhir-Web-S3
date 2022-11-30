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
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div style="background-color: rgb(61, 44, 141); border-radius: 10px; height: 1600px; width: 360px;">
                    <div class="sticky-top" style="margin-left: 10px; margin-top: 30px;">
                        <br>
                        <div>
                            <a href="#ayam">
                                <button type="button" class="btn" style="margin-left: 20px; margin-bottom: 10px; background-color: rgb(201,150,204); padding-right: 242px;">
                                    > Ayam
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href="#ikan">
                                <button type="button" class="btn" style="margin-left: 20px; margin-bottom: 10px; background-color: rgb(201,150,204); padding-right: 252px;">
                                    > Ikan
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href="#telur">
                                <button type="button" class="btn" style="margin-left: 20px; margin-bottom: 10px; background-color: rgb(201,150,204); padding-right: 247px;">
                                    > Telur
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href="#daging">
                                <button type="button" class="btn" style="margin-left: 20px; margin-bottom: 10px; background-color: rgb(201,150,204); padding-right: 235px;">
                                    > Daging
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-9">
                <div class="containerBackgroundI text-center">
                    <div id="ayam" class="fw-semibold fs-4 mb-1" style="text-decoration-color: rgb(22, 33, 62); margin-top: 30px;">
                        AYAM
                    </div>
                    <div style="column-count: 3;">
                        <?php
                        include('connect.php');

                        $sql    = "SELECT * FROM menu where nama_menu like '%ayam%'";
                        $query    = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="containerFill">
                                <a href="detailPage.php?id_menu=<?= $data['id_menu']; ?>">
                                    <div style="width: 50px; height: 50px;">
                                        <img src="assets/<?= $data['id_menu']; ?>.jpg" alt="assets/<?= $data['id_menu']; ?>.jpeg" class="imageStyle">
                                    </div>
                                    <button type="button" class="btn text-light" style="font-size:  17px; margin-top: 70px;"><?= $data['nama_menu']; ?></button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="containerBackgroundI text-center">
                    <div id="ikan" class="fw-semibold fs-4 mb-1" style="text-decoration-color: rgb(22, 33, 62)">
                        IKAN
                    </div>
                    <div style="column-count: 2;">
                        <?php
                        include('connect.php');

                        $sql    = "SELECT * FROM menu where nama_menu like '%ikan%'";
                        $query  = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="containerFill2">
                                <a href="detailPage.php?id_menu=<?= $data['id_menu']; ?>">
                                    <div style="width: 50px; height: 50px;">
                                        <img src="assets/<?= $data['id_menu']; ?>.jpg" alt="assets/<?= $data['id_menu']; ?>.jpeg" class="imageStyle">
                                    </div>
                                    <button type="button" class="btn text-light" style="font-size:  17px; margin-top: 70px;"><?= $data['nama_menu']; ?></button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="containerBackgroundI text-center">
                    <div id="telur" class="fw-semibold fs-4 mb-1" style="text-decoration-color: rgb(22, 33, 62)">
                        TELUR
                    </div>
                    <div style="column-count: 2;">
                        <?php
                        include('connect.php');

                        $sql    = "SELECT * FROM menu where nama_menu like '%telur%'";
                        $query    = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="containerFill2">
                                <a href="detailPage.php?id_menu=<?= $data['id_menu']; ?>">
                                    <div style="width: 50px; height: 50px;">
                                        <img src="assets/<?= $data['id_menu']; ?>.jpg" alt="assets/<?= $data['id_menu']; ?>.jpeg" class="imageStyle">
                                    </div>
                                    <button type="button" class="btn text-light" style="font-size:  17px; margin-top: 65px;"><?= $data['nama_menu']; ?></button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="containerBackgroundI text-center">
                    <div id="daging" class="fw-semibold fs-4 mb-1" style="text-decoration-color: rgb(22, 33, 62);">
                        DAGING
                    </div>
                    <div style="column-count: 3;">
                        <?php
                        include('connect.php');

                        $sql    = "SELECT * FROM menu where nama_menu like '%daging%'";
                        $query    = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="containerFill">
                                <a href="detailPage.php?id_menu=<?= $data['id_menu']; ?>">
                                    <div style="width: 50px; height: 50px;">
                                        <img src="assets/<?= $data['id_menu']; ?>.jpg" alt="assets/<?= $data['id_menu']; ?>.jpeg" class="imageStyle">
                                    </div>
                                    <button type="button" class="btn text-light" style="font-size:  17px; margin-top: 70px;"><?= $data['nama_menu']; ?></button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>