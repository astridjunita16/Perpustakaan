<?php 

include 'connection.php';
$id_jenis_buku = $_GET['id'];
$delete = Mysqli_query($connect, "DELETE FROM jenis_buku WHERE id='$id_jenis_buku'");

if ($delete) {
    header('location: jenis_buku.php');
} else {
    echo 'gagal';
}
