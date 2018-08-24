<html>
    <head>
        <title>Dashboard - Event management</title>
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
                                Data Acara Intermedia
                            </h1>
                        </div>
                        <a class="btn btn-primary mb-5" href="<?= base_url(); ?>executive/tambah/acara">Tambah Data</a>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Acara Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Judul</th>
<!--                                                    <th>Divisi</th>-->
                                                    <th>Tanggal</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    foreach($acara as $ad){
                                                ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $ad['judul'] ?> </td>
<!--                                                    <td><?= $ad['divisi'] ?></td>-->
                                                    <td><?= $ad['tanggal'] ?></td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?= base_url('executive/edit/acara/'.$ad['idEvent']) ?>">
                                                            <i class="fe fe-edit"></i> Edit</a>
                                                            <a class="btn btn-danger" href="<?= base_url('executive/hapus/acara/'.$ad['idEvent']) ?>">
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