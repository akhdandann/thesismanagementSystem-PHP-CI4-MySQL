<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Daftar Revisi Sidang Proposal Sistem Informasi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('home') ?>/uploadstyle.css" rel="stylesheet" />
</head>
<header class="bg-dark py-10">
    <div class="row gx-5 justify">
        <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="my-3 text-center text-xl-start">
                <div class="container px-5">
                    <h2 class=" display-20 fw-bolder text-white mb-2">Riwayat Revisi Sidang Proposal Sistem Informasi</h2>
                    <p class="lead fw-normal text-white-50 mb-4">Laboratorium Rekayasa Data dan Intelegensi Bisnis</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<body>
    <div class="container-fluid bg-2 text-left">
        <div class="card">
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Upload</th>
                            <th>Topik Skripsi</th>
                            <th>Judul Skripsi</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($berkas as $row) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->created_at; ?></td>
                                <td><?= $row->topik; ?></td>
                                <td><?= $row->judul; ?></td>
                                <td><?= $row->keterangan; ?></td>
                                <td><a class="btn btn-success" href="<?= base_url(); ?>/berkas/download/<?= $row->id_berkas; ?>">Download</a>
                                    <a class="btn btn-danger" href="<?= base_url(); ?>/berkas/download/<?= $row->id_berkas; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <p>Ingin menambahkan revisi? Silahkan melakukan proses Upload disini.</p>
                <a href="<?= base_url(); ?>/berkas/create" class="btn btn-primary">Upload</a>
                <hr />
            </div>
        </div>
    </div>
    <footer class="bg-dark py-3 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; SimTA Akhdan Arifuddin 2022</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url('home') ?>/js/scripts.js"></script>
</body>

</html>