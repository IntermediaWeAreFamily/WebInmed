<html>
    <head>
        <title>Dashboard - News management</title>
        <?php
            $this->load->view('admin/header');
        ?>
    </head>
    <body>
        <div class="page">
            <div class="page-main">
                <?php
                $this->load->view('admin/nav');
                ?>
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="page-title">
                                Data Berita Intermedia
                            </h1>
                        </div>
                        <a class="btn btn-primary mb-5" href="<?= base_url(); ?>executive/tambah/berita">Tambah Data</a>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Berita Intermedia</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">No.</th>
                                                    <th>Judul</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>     
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    foreach($berita as $ad){
                                                ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $ad['judul'] ?> </td>
                                                    <td><?= $ad['kategori'] ?></td>
                                                    <td><?= $ad['tanggal'] ?></td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?= base_url('executive/edit/berita/'.$ad['idBerita']) ?>">
                                                            <i class="fe fe-edit"></i> Edit</a>
                                                            <a class="btn btn-danger" href="<?= base_url('executive/hapus/berita/'.$ad['idBerita']) ?>">
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