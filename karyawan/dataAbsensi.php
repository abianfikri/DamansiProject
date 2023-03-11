<div class="container" style="width: fit-content;">
    <div class="card">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold text-primary text-center">Data Absensi</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Id Pegawai</th>
                        <th>Masuk</th>
                        <th>Terlambat</th>
                        <th>Pulang</th>
                        <th>Lembur</th>
                        <th>Jobdesk</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = $_SESSION['nama'];
                    $query = mysqli_query($con, "SELECT * FROM absensi WHERE nama = '$i' ORDER BY tgl_absen ='$tgl' DESC");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['idpegawai'] ?></td>
                            <td><?= $data['masuk'] ?></td>
                            <td><?= $data['terlambat'] ?></td>
                            <td><?= $data['pulang'] ?></td>
                            <td><?= $data['lembur'] ?></td>
                            <td><?= $data['jobdesk'] ?></td>
                            <td><?= $data['tgl_absen'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>