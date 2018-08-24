<html>
    <head>
        <title>Dashboard - Achievment management</title>
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
                                Data Pencapaian Intermedia
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Pencapaian Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Juara</th>
                                                    <th>Keterangan</th>
                                                    <th>Foto</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    foreach($pencapaian as $ad){
                                                ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $ad['juara'] ?> </td>
                                                    <td><?= $ad['keterangan'] ?></td>
                                                    <td><?= $ad['foto']?></td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?= base_url('executive/edit/pencapaian/'.$ad['idAchievement']) ?>">
                                                            <i class="fe fe-edit"></i> Edit</a>
                                                            <a class="btn btn-danger" href="<?= base_url('executive/hapus/pencapaian/'.$ad['idAchievement']) ?>">
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
                            <div class="col-lg-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fe fe-plus"></i>  Tambah Achievment (Juara) baru</h3>
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
                                        <form action="<?php echo base_url(); ?>executive/tambah/pencapaian" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                    <label class="form-label">Judul</label>
                                                    <input class="form-control" placeholder="Masukkan Nama Achievement" type="text" name="juara" required="required">
                                            </div>
                                            <div class="form-group">
                                                    <label class="form-label">Isi</label>
                                                    <textarea class="form-control" placeholder="Masukkan Keterangan Achievement" name="ket" required="required"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Foto</label>
                                                <input type="file" name="foto" class="form-control" accept="image/*">
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