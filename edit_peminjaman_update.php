<?php

include 'connection.php';
$id = $_POST['id'];
$nama_siswa = $_POST['nama_siswa'];
$nama_buku = $_POST['nama_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$insert = mysqli_query($connect, "UPDATE peminjaman SET siswa_id='$nama_siswa',buku_id='$nama_buku',tanggal_peminjaman='$tanggal_peminjaman',tanggal_pengembalian='$tangggal_pengembalian' WHERE id='$id'");

if ($insert) {
    header('location: peminjaman.php');
} else {
    echo 'Input gagal';
}
