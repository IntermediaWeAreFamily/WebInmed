<html>
    <head>
        <title>Dashboard - admin management</title>
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
                                Data Anggota Intermedia
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Anggota Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Id Anggota</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Email</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($anggota as $ad) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $ad['idAnggota'] ?> </td>
                                                        <td><?= $ad['nama_lengkap'] ?></td>
                                                        <td><?= $ad['email'] ?></td>
                                                        <td>
                                                            <a class="btn btn-primary" href="<?= base_url('Admin/Dashboard/editAdmin/' . $ad['idAnggota']) ?>">
                                                                <i class="fe fe-edit"></i> Edit</a>
                                                            <a class="btn btn-danger" href="<?= base_url('Admin/Dashboard/deleteAdmin/' . $ad['idAnggota']) ?>">
                                                                <i class="fe fe-delete"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fe fe-plus"></i>  Tambah data anggota baru</h3>
                                        <div class="card-options">
                                            <a class="card-option-collapse" href="#" data-toggle="card-collapse">
                                                <i class="fe fe-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--<div class="card-alert alert alert-success mb-0">-->
                                    <?= $this->session->flashdata('pesan') ?>
                                    <!--</div>-->
                                    <div class="card-body">
                                        <form action="<?php echo base_url(); ?>Admin/Dashboard/createAdmin" method="post">
                                            <div class="form-group">
                                                <label class="form-label">ID Anggota</label>
                                                <input class="form-control" placeholder="ID Anggota" type="text" name="idA" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input class="form-control" placeholder="Masukkan nama lengkap" type="text" name="namaL" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" placeholder="Masukkan Email" type="email" name="email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input class="form-control" placeholder="Masukkan Password" name="password" type="password" required="required">
                                            </div>
                                            <div class="form-footer">
                                                <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $this->load->view('Admin/footer');
            ?>
        </div>
    </body>
</html>