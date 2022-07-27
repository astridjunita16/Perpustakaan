<?php
include 'connection.php';
$label = $_POST['label'];
$insert = mysqli_query($connect, "INSERT INTO jenis_buku SET label='$label'");

if ($insert) {
    header('location: jenis_buku.php');
} else {
    echo 'Input gagal';
}
