<html>
    <head>
        <title>Dashboard - Member Management</title>
        <?php
        $this->load->view('Admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-main">
                <?php
                $this->load->view('Admin/nav');
                ?>
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="page-title">
                                Data Pendaftar Anggota Intermedia
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Pendaftar Anggota Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>No Pendaftaran</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Jurusan</th>
                                                    <th>No Hp</th>
                                                    <th>Action</th>
                                                    <th>Nilai</th>
                                                    <th>Ket</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($pendaftar as $ad) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $ad['no_pendaftaran'] ?> </td>
                                                        <td><?= $ad['nama_lengkap'] ?></td>
                                                        <td><?= $ad['jenis_kelamin'] ?></td>
                                                        <td><?= $ad['jurusan'] ?></td>
                                                        <td>Lihat Detail</td>
                                                        <td><input type="text" name="nilai" value="<?php //$c['nilai']  ?>" style="width: 50px;"></td>


                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>