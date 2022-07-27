<?php
include 'connection.php';

$id_jenis_buku = $_POST['id'];
$label = $_POST['label'];

$update = mysqli_query($connect, "UPDATE jenis_buku SET label='$label' WHERE id='$id_jenis_buku'");
if ($update) {
	header('location: jenis_buku.php');
} else {
	echo 'update gagal';
}
