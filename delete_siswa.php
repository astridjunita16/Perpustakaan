<?php

include 'connection.php';
$id_siswa = $_GET['id'];
$delete = Mysqli_query($connect, "DELETE FROM siswa WHERE id='$id_siswa'");

if ($delete) {
    header('location: siswa.php');
} else {
    echo 'gagal';
}
