<?php
include "connect.php";
$id_pesanan = $_GET['id_pesanan'];

$sql_id = "UPDATE pesanan SET id_status = '2' where id_pesanan = $id_pesanan";
$query_id = mysqli_query($koneksi, $sql_id);

$sql = "INSERT INTO `transaksi` (`id_transaksi`,`id_pesanan`, `tanggal_lunas`) VALUES ('', '$id_pesanan', current_timestamp())";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    header("location:reservationPage.php?message=bayarBerhasil");
} else {
    header("location:reservationPage.php?message=bayarGagal");
}
