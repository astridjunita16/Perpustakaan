<?php

include 'connection.php';
$id_buku = $_GET['id'];
$delete = Mysqli_query($connect, "DELETE FROM buku WHERE id='$id_buku'");

if ($delete) {
    header('location: index.php');
} else {
    echo 'gagal';
}
