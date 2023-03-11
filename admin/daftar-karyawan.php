<?php
require('../koneksi.php');
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: ../login.php");
}
$level = $_SESSION['bagian'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Admin CSS -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <!-- Boostrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <!-- font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>DAMANSI | ADMIN</title>
</head>

<body>
    <!-- side bar start -->
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 ">
                <h4 class="fs-4 d-flex"><span class="bg-white text-dark rounded shadow px-1 me-2 p">DS</span> <span class="text-white px-4">Damansi</span> <button class="btn d-md-none d-block close-btn px-2 ms-4 py-0 text-white"><i class="fa-solid fa-bars fa-lg"></i></button></h4>
                <div class="container px-4 ms-5">
                    <i class="fa-solid fa-circle-user fa-6x"></i>
                    <!-- <img src="/assets/img/logo.png" alt="" style="width: 50%;"> -->
                </div>
                <h5 class="text-center text-white mt-3"><?php echo $level ?></h5>
                <h4 class="text-center mt-3"><?php echo $_SESSION['nama'] ?></h4>

                <ul class="list-unstyled px-3 py-4">
                    <!-- ADMIN FITUR -->
                    <li><a href="admin-index.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-list"></i>
                            Dashboard</a></li>
                    <li><a href="data.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-list"></i>
                            Data Karyawan</a></li>
                    <li><a href="report.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-days"></i>
                            Report Karyawan</a></li>
                    <li class="active"><a href="daftar-karyawan.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-minus"></i>
                            Pendaftaran Karyawan</a></li>
                    <hr class="h-color mx-2 m-5">
                    <a href="../karyawan/logout.php" style="width: 195px;" class="btn btn-danger text-decoration-none ms-0 px-5 py-2 d-block"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</a>
                </ul>
            </div>
        </div>

        <!-- Content Start -->
        <div class="content mb-2">
            <!-- Nav Start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">

                        <button class="btn px-1 py-0 open-btn"><i class="fa fa-bars fa-2x"></i></button>
                    </div>

                    <div class="d-flex justify-content-between d-md-none d-block">
                        <h1>Damansi</h1>
                    </div>
                </div>
            </nav>
            <!-- Nav End -->
            <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('report')">Report Karyawan</p>
                <p class="tab-links" onclick="opentab('ringkasan')">Ringkasan Presensi</p>
            </div>
            <div class="tab-contents active-tab" id="report">
                <table class="table table-bordered table-striped">
                    <thead class="table-danger">
                        <tr>
                            <th>No</th>
                            <th>ID Pegawai</th>
                            <th>Nama Lengkap</th>
                            <th>Total Presensi</th>
                            <th>Total Izin</th>
                            <th>Total Cuti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1234543432</td>
                            <td>Jhony Ahmad</td>
                            <td>30</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1234543432</td>
                            <td>Rafrafil Jumadil</td>
                            <td>30</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1234543432</td>
                            <td>Diki Alfarabi Hadi</td>
                            <td>30</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1234543432</td>
                            <td>Ma'un Syah</td>
                            <td>30</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td colspan="2"></td>
                            <td>Numerik</td>
                            <td>Numerik</td>
                            <td>Numerik</td>
                        </tr>
                        <tr>
                            <td>Total Keseluruhan</td>
                            <td colspan="5" class="text-center">Numerik</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-contents" id="ringkasan">
                <table class="table table-bordered">
                    <thead class="table-danger text-center">
                        <tr>
                            <th>No</th>
                            <th>TimeStamp </th>
                            <th>Nama Lengkap</th>
                            <th>ID Pegawai</th>
                            <th>WFO/WFH</th>
                            <th>Masuk/Keluar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>22 Mar, 5:08 PM </td>
                            <td>Jhony Ahmad</td>
                            <td>1200230</td>
                            <td>WFO</td>
                            <td>Keluar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>22 Mar, 5:08 PM </td>
                            <td>Rafrafil Jumadil</td>
                            <td>1200230</td>
                            <td>WFO</td>
                            <td>Masuk</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>22 Mar, 5:08 PM </td>
                            <td>Diki Alfarabi Hadi</td>
                            <td>1200230</td>
                            <td>WFH</td>
                            <td>Masuk</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>22 Mar, 5:08 PM </td>
                            <td>Ma'un Syah</td>
                            <td>1200230</td>
                            <td>WFO</td>
                            <td>Keluar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Content End -->

    </div>
    <!-- My JS -->
    <script src="../assets/js/script.js"></script>

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>