<?php
date_default_timezone_set('asia/jakarta');
session_start();
include('../koneksi.php');
if (isset($_POST['submit'])) {
    $tgl = date('Y-m-d');
    if ($_GET['a'] == 'M') {
        $karyawan = $_SESSION['nama'];
        $idPegawai = $_SESSION['idpegawai'];
        $kondisi = $_POST['kondisi'];
        if (isset($_POST['keterangan'])) {
            $ket = $_POST['keterangan'];
        }
        $jobdesk = $_POST['jobdesk'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $w_masuk = new DateTime("08:00");
        $now = new DateTime();
        $a_masuk = date("H:i");
        // $a_masuk = "07:00";
        $j = $now->diff($w_masuk)->h;
        $m = $now->diff($w_masuk)->i;
        if ($now < $w_masuk) {
            $late = "0.0";
        } else {
            $late = $j . '.' . $m;
        }
        $query = mysqli_query($con, "INSERT INTO absensi(nama,masuk,terlambat,latitude_masuk,longitude_masuk,tgl_absen,idpegawai,kondisi,keterangan,jobdesk) VALUES('$karyawan','$a_masuk','$late','$latitude','$longitude','$tgl','$idPegawai','$kondisi','$ket','$jobdesk')");
        if ($query) {
            echo "<script>alert('Terima Kasih, Data Presensi Masuk anda telah tersimpan');document.location='presensi.php'</script>";
        }
    } else if ($_GET['a'] == 'P') {
        $k = $_SESSION['nama'];
        $jobdesk = $_POST['jobdesk'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $w_pulang = new DateTime("17:00");
        $now = new DateTime();
        $a_pulang = date('H:i');
        $j = $now->diff($w_pulang)->h;
        $m = $now->diff($w_pulang)->i;

        if ($now < $w_pulang) {
            $over = 0.0;
        } else {
            $over = $j . '.' . $m;
        }
        // print($over);die;
        $query = mysqli_query($con, "UPDATE absensi SET pulang = '$a_pulang',lembur = '$over', latitude_pulang = '$latitude', longitude_pulang = '$longitude', jobdesk = '$jobdesk' WHERE nama = '$k' AND tgl_absen = '$tgl'");
        if ($query) {
            header('location: presensi.php');
            echo "<script>alert('Terima Kasih, Data Presensi Keluar anda telah tersimpan');document.location='presensi.php'</script>";
        }
    } else {
        echo "<script>alert('Oppss ada Kesalahan !!!!');document.location='presensi.php'</script>";
    }
} else {
    echo "<script>alert('Oppss ada Kesalahan !!!!');document.location='presensi.php'</script>";
}
?>