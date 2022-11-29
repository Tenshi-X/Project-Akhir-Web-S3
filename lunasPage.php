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
                            <iconify-icon icon="material-symbols:home" inline style="color: white; margin-left: 23%" width="20" height="20"></iconify-icon>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" style=" margin-right: 10px; font-size: large;" aria-current="page" href="menuPage.php">
                            <iconify-icon icon="ic:baseline-menu-book" inline style="color: white; margin-left: 21%" width="20" height="20"></iconify-icon>Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" style="font-size: large;" href="orderPage.php">
                            <iconify-icon inline icon="tabler:cup" style="color: white; margin-left: 22%" width="20" height="20"></iconify-icon>Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" style=" margin-right: 740px; font-size: large;" href="reservationPage.php">
                            <iconify-icon inline icon="icon-park-outline:transaction-order" style="color: white; margin-left: 35%" width="20" height="20"></iconify-icon>Reservation
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
    <div style="column-count: 3;">
        <center>
            <div>
                <a href="reservationPage.php">
                    <button type="button" class="btn btn-primary text-light">Belum Bayar</button>
                </a>
            </div>
            <div>
                <a href="lunasPage.php">
                    <button type="button" class="btn btn-success text-light">Sudah Bayar</button>
                </a>
            </div>
        </center>

    </div>
    <div style="background-color: rgb(201, 150, 204); width: 1250px; height: 600px; margin-left: 120px; border-radius: 10px; ">
        <div style="width: 1200px; height: 450px;">
            <div style="width: 1200px; height: 450px;">
                <?php
                include('connect.php');
                $username = $_SESSION['username'];
                $sql_id = "SELECT * from user where username = '$username'";
                $query_id = mysqli_query($koneksi, $sql_id);
                $data_id = mysqli_fetch_array($query_id);
                $id =  $data_id['id_user'];
                $sql    = "SELECT * FROM transaksi INNER JOIN pesanan ON transaksi.id_pesanan = pesanan.id_pesanan INNER JOIN menu ON pesanan.id_menu = menu.id_menu  where id_user = $id && id_status = 2";
                $query    = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div hidden>
                        <?php
                        $porsi = $data['porsi'];
                        $harga = $data['harga'];
                        $total_harga = $porsi * $harga;
                        ?>
                    </div>
                    <div style="column-count: 3;">
                        <div class="containerFill text-light"">
                    <?= $data['nama_menu']; ?>
                    </div>
                        <div class=" text-light">
                            <?= $total_harga ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>

</html>