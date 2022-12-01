<?php
include "connect.php";
$id_pesanan = $_POST['pesanan'];
$id_sayur   = $_POST['sayur'];
$id_minuman = $_POST['minuman'];
$porsi      = $_POST['porsi'];
$tgl_acara = $_POST['tgl_acara'];
$waktu_acara = $_POST['waktu_acara'];

$sql = "UPDATE pesanan SET id_sayur='$id_sayur', id_minuman='$id_minuman', porsi='$porsi',tgl_acara = '$tgl_acara' , waktu_acara='$waktu_acara' WHERE id_pesanan=$id_pesanan";
$query = mysqli_query($koneksi, $sql);


if ($query) {
    header("location:reservationPage.php?message=editBerhasil");
} else {
    header("location:reservationPage.php?message=editGagal");
}
