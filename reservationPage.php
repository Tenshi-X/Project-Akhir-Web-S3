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

    <div style="column-count: 2; margin-bottom: 10px;">
        <center>
            <div>
                <a href="reservationPage.php">
                    <button type="button" class="btn btn-primary text-light" style=" width: 450px; margin-left: 120px;">Belum Bayar</button>
                </a>
            </div>
            <div>
                <a href="lunasPage.php">
                    <button type="button" class="btn btn-success text-light" style=" width: 450px; margin-right: 120px;">Sudah Bayar</button>
                </a>
            </div>
        </center>
    </div>
    <div class="text-light">
        <center>
            <?php
            if (isset($_GET['message'])) {
                if ($_GET['message'] == "bayarBerhasil") {
                    echo "Pembayaran Berhasil";
                } elseif ($_GET['message'] == "bayarGagal") {
                    echo "Pembayaran Gagal";
                } elseif ($_GET['message'] == "editBerhasil") {
                    echo "Edit Data Berhasil";
                } elseif ($_GET['message'] == "editGagal") {
                    echo "Edit Data Gagal";
                } elseif ($_GET['message'] == "hapusBerhasil") {
                    echo "Hapus Data Berhasil";
                } elseif ($_GET['message'] == "hapusGagal") {
                    echo "Hapus Data Gagal";
                }
            }
            ?>
        </center>
    </div>
    <div style="background-color: rgb(201, 150, 204); width: 1250px; height: 1000px; margin-left: 120px; border-radius: 10px; ">
        <div class="row" style="background-color: black; border-radius: 10px; height: 80px; margin-bottom: 5px;">
            <div class="text-light col-2" style="margin-top: 20px;">
                <center>
                    <div>Tanggal Pesan &</div>
                    <div>Waktu Pesan</div>
                </center>
            </div>
            <div class="text-light col-2" style="margin-top: 20px;">
                <center>
                    Nama Menu
                </center>
            </div>
            <div class="text-light col-1" style="margin-top: 20px; margin-left: 10px">
                Total Harga
            </div>
            <div class="text-light text-center col-2" style="margin-top: 20px; ">
                <div>Tanggal Acara &</div>
                <div>Waktu Acara</div>
            </div>
            <div class="text-light text-center col-3" style="margin-top: 20px; margin-left: 50px;">
                Action
            </div>
        </div>
        <div style="width: 1220px; height: 450px; padding: 6px;">
            <?php
            include('connect.php');
            $username   = $_SESSION['username'];
            $sql_id     = "SELECT * from user where username = '$username'";
            $query_id   = mysqli_query($koneksi, $sql_id);
            $data_id    = mysqli_fetch_array($query_id);

            $id         = $data_id['id_user'];
            $sql        = "SELECT * FROM pesanan INNER JOIN menu ON pesanan.id_menu = menu.id_menu WHERE id_user = $id AND id_status = 1";
            $query      = mysqli_query($koneksi, $sql);

            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div hidden>
                    <?php
                    $porsi = $data['porsi'];
                    $harga = $data['harga'];
                    $total_harga = $porsi * $harga;
                    ?>
                </div>
                <div class="row" style="background-color:  rgb(61, 44, 141); border-radius: 10px; height: 220px; margin-left: 15px; margin-top: 10px; margin-bottom: 5px;">
                    <div class="text-light col-2" style="margin-top: 95px; margin-left: 5px">
                        <?= $data['tglwaktu_pesan']; ?>
                    </div>
                    <div class="text-light col-2" style="margin-top: 20px;">
                        <div style="width: 50px; height: 50px;">
                            <img src="assets/<?= $data['id_menu']; ?>.jpg" alt="assets/<?= $data['id_menu']; ?>.jpeg" class="reservationImage">
                        </div>
                        <div style="margin-top: 80px; "><?= $data['nama_menu']; ?></div>
                    </div>
                    <div class=" text-light col-1" style="margin-top: 95px;">
                        <?= $total_harga ?>
                    </div>
                    <div class=" text-light text-center col-2" style="margin-top: 95px;">
                        <?= $data['tgl_acara'] ?> <?= $data['waktu_acara'] ?>
                    </div>
                    <div class="col-1">
                        <div>
                            <a href="editPesanan.php?id_pesanan=<?= $data['id_pesanan'] ?>">
                                <button type="button" class="btn btn-primary" style="width: 85px; margin-top: 90px;">Edit</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-1">
                        <div>
                            <a href="deletePesanan.php?id_pesanan=<?= $data['id_pesanan'] ?>">
                                <button type="button" class="btn btn-danger" style="width: 85px; margin-top: 90px;">Delete</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-1">
                        <div>
                            <a href="lunasProcess.php?id_pesanan=<?= $data['id_pesanan'] ?>">
                                <button type="button" class="btn btn-success" style="width: 250px; margin-top: 90px;">Bayar</button>
                            </a>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>

    <script src=" https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js">
    </script>
</body>

</html>