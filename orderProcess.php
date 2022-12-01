<?php
include 'connect.php';

$id_user		= $_POST['id_user'];
$id_menu		= $_POST['id_menu'];
$id_lauk 		= $_POST['id_lauk'];
$id_sayur		= $_POST['id_sayur'];
$id_minuman		= $_POST['id_minuman'];
$porsi			= $_POST['porsi'];
$tgl_acara		= $_POST['tgl_acara'];
$waktu_acara	= $_POST['waktu_acara'];

$sql		= "INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_menu`, `id_lauk`, `id_sayur`, `id_minuman`, `porsi`,`id_status`, `tgl_acara`, `waktu_acara`, `tglwaktu_pesan`) VALUES ('', '$id_user', '$id_menu', '$id_lauk', '$id_sayur', '$id_minuman', '$porsi','1','$tgl_acara','$waktu_acara', current_timestamp());";
$query		= mysqli_query($koneksi, $sql);

if ($query) {
	header("Location:orderPage.php?message=berhasilOrder");
} else {
	header("Location:orderPage.php?message=gagalOrder");
}
