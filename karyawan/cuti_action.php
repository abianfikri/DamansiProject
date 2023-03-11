<?php
date_default_timezone_set('asia/jakarta');
session_start();
include('../koneksi.php');

if (isset($_POST['submit'])) {
    $karyawan = $_SESSION['nama'];
    $tgl1 = $_POST['mulai'];
    $tgl2 = $_POST['selesai'];
    $ket = $_POST['alasan'];

    $dari = new DateTime($tgl1);
    $sampai = new DateTime($tgl2);
    $d = $sampai->diff($dari)->days + 1;
    $query = mysqli_query($con, "INSERT INTO cuti(nama,dari,sampai,lama,keterangan) VALUES('$karyawan','$tgl1','$tgl2','$d','$ket')");
    if ($query) {
        echo "<script>alert('Terima Kasih, Cuti anda sedang di Proses');document.location='cuti.php'</script>";
    }
} else {
    echo "<script>alert('Gagal Proses Cuti');document.location='cuti.php'</script>";
}
?>