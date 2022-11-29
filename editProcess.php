<?php
include "connect.php";
$id_pesanan = $_POST['id_pesanan'];
$id_sayur        = $_POST['id_sayur'];
$id_minuman        = $_POST['id_minuman'];
$porsi            = $_POST['porsi'];
$waktu_acara    = $_POST['waktu_acara'];

$sql = "UPDATE pesanan SET id_sayur='$id_sayur', id_minuman='$id_minuman', porsi='$porsi', waktu_acara='$waktu_acara' WHERE id_pesanan=$id_pesanan";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:jadwalPraktikum.php");
} else {
    echo "location:jadwalPraktikum.php?message=edit_fail";
}
