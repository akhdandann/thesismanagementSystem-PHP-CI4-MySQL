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

<body>
    <header class="bg-dark py-10">
        <div class="row gx-5 justify">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-3 text-center text-xl-start">
                    <div class="container px-5">
                        <h2 class=" display-20 fw-bolder text-white mb-2">Upload Revisi Sidang Proposal Sistem Informasi</h2>
                        <p class="lead fw-normal text-white-50 mb-4">Laboratorium Rekayasa Data dan Intelegensi Bisnis</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div class="container-fluid bg-2 text-left">
        <div class="card">
            <div class="card-header">
                Form Upload Revisi Sidang Proposal Sistem Informasi
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/berkas/save" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="topik" class="form-label">Topik Skripsi</label>
                        <textarea class="form-control" id="topik" name="topik" rows="1"><?= old('topik'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Skripsi</label>
                        <textarea class="form-control" id="judul" name="judul" rows="1"><?= old('judul'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label>
                        <p class="fw-bolder text-justify text-danger">Pastikan Dokumen dalam Format PDF!</p>
                        <input type="file" class="form-control" id="berkas" name="berkas">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= old('keterangan'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Upload" />
                    </div>
                </form>
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