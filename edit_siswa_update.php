<?php

include 'connection.php';
$id = $_POST['id'];
$nama_siswa = $_POST['nama_siswa'];
$kelas_id = $_POST['kelas_id'];
$insert = mysqli_query($connect, "UPDATE siswa SET nama_siswa='$nama_siswa',kelas_id='$kelas_id' WHERE id='$id'");
if ($insert) {
    header('location: siswa.php');
} else {
    echo 'Input gagal';
}