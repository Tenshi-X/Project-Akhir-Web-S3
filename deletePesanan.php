<?php
include "connect.php";
$id_pesanan = $_GET['id_pesanan'];
$query = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan=$id_pesanan");

if ($query) {
    header("location:reservationPage.php?message=hapusBerhasil");
} else {
    header("location:reservationPage.php?message=hapusGagal");
}