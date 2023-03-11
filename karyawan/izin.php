<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: ../login.php");
}
$level = $_SESSION['bagian'];
$name = $_SESSION['nama'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>DAMANSI | Izin</title>

    <!-- Boostrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style2.css">

    <!-- font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- Sidebar Satart -->
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 ">
                <h1 class="fs-4 d-flex"><span class="bg-white text-dark rounded shadow px-1 me-2">DS</span> <span class="text-white px-4">Damansi</span> <button class="btn d-md-none d-block close-btn px-2 ms-4 py-0 text-white"><i class="fa-solid fa-bars fa-lg"></i></button></h1>
                <div class="container px-4 ms-5">
                    <i class="fa-solid fa-circle-user fa-6x"></i>
                    <!-- <img src="/assets/img/logo.png" alt="" style="width: 50%;"> -->
                </div>
                <h5 class="text-center text-white mt-3"><?php echo $_SESSION['bagian'] ?></h5>
                <h4 class="text-center mt-3"><?php echo $_SESSION['nama'] ?></h4>

                <ul class="list-unstyled px-3 py-4">

                    <!-- Karyawan Fitur -->
                    <?php if ($level == "Karyawan") { ?>
                        <li><a href="presensi.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-list"></i>
                                Presensi</a></li>
                        <li class="active"><a href="izin.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-days"></i>
                                Pengajuan Izin</a></li>
                        <li><a href="cuti.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-minus"></i>
                                Pengajuan
                                Cuti</a></li>
                        <li><a href="status.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-minus"></i>
                                Status Izin & Cuti</a></li>
                        <hr class="h-color mx-2 m-5">

                        <button href="#" class=" btn btn-danger mb-3 px-5 py-2 d-block"><i class="fa fa-gear"></i>
                            Edit Profile</button>
                        <a href="logout.php" style="width: 195px;" class="btn btn-danger text-decoration-none ms-0 px-5 py-2 d-block"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</a>
                    <?php } ?>

                    <!-- Leader Fitur -->
                    <?php if ($_SESSION['bagian'] == "Leader") { ?>
                        <li><a href="presensi.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa fa-list"></i>
                                Presensi</a></li>
                        <li class="active"><a href="izin.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-days"></i>
                                Pengajuan Izin</a></li>
                        <li><a href="cuti.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-minus"></i>
                                Pengajuan
                                Cuti</a></li>
                        <li><a href="status.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-minus"></i>
                                Ringkasan Presensi</a></li>
                        <li><a href="status.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-calendar-minus"></i>
                                Data Izin dan Cuti</a></li>
                        <hr class="h-color mx-2 ">

                        <button href="#" class=" btn btn-danger mb-3 px-5 py-2 d-block"><i class="fa fa-gear"></i>
                            Edit Profile</button>
                        <a href="logout.php" style="width: 195px;" class="btn btn-danger text-decoration-none ms-0 px-5 py-2 d-block"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</a>
                    <?php } ?>

                </ul>

            </div>
        </div>

        <!-- Content Start -->
        <div class="content mb-3">
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

            <!-- Form Start -->
            <form>
                <div class="container mt-3" style="width: fit-content;">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <img src="../assets/img/logo.png" alt="ini adalah logo" class="m-auto" style="width:30%;">
                                <h3 class="m-auto">Pengajuan Izin</h3>
                                <div class="card-body">
                                    <!-- Nama Lengkap -->
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="mb-2">
                                                <label for="nama" class="form-label">Nama
                                                    Lengkap</label>
                                                <input type="text" class="form-control" disabled id="nama" <?php echo "value = $name " ?> />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Jam Izin -->
                                    <div class="container border border-dark rounded">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="mb-2">
                                                    <h5 for="" class="form-label">Jam Izin</h5>
                                                    <div class="row mb-md-3">
                                                        <div class="col-md-4">
                                                            <label for="">Mulai</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="time" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="">Selesai</label>
                                                        </div>
                                                        <div class="col-md mb-2">
                                                            <input type="time" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Tanggal -->
                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                            <label for="">Tanggal</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- Alasan -->
                                    <div class="row mb-3 mt-2">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Alasan Izin</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 ">
                                        <button class="btn btn-danger" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
            <!-- Form End -->
        </div>
        <!-- Content End -->
    </div>
    <!-- Sidebar End -->

    <!-- My JS -->
    <script src="../assets/js/script.js"></script>

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>