<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="<?php echo base_url('mahasiswa') ?>/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Selamat Datang Mahasiswa Sistem Informasi ITS!</h3>
                                    <p class="text-center font-weight-light my-2"> Silahkan masukkan username dan password </p>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $session = \config\Services::session();
                                    if ($session->getFlashdata('warning')) {
                                    ?>
                                        <div class="alert alert-warning">
                                            <ul>
                                                <?php
                                                foreach ($session->getFlashdata('warning') as $val) {
                                                ?>
                                                    <li><?php echo $val ?></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php
                                    }
                                    if ($session->getFlashdata('success')) {
                                    ?>
                                        <div class="alert alert-success"><?php echo
                                                                            $session->getFlashdata('success') ?></div>
                                    <?php
                                    }
                                    ?>
                                    <form method="POST" action="">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" type="text" placeholder="uname" name="uname" value="<?php if ($session->getFlashdata('uname')) echo $session->getFlashdata('uname') ?>" />
                                            <label for=" inputUsername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="pass" placeholder="pass" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" name="remember_me" type="checkbox" value="1" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="lupapassword">Forgot Password?</a>
                                            <a class="btn btn-primary" href="homemhs" role="button">LOGIN</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-justify py-3">
                                    <div class="small"><a href="http://localhost:8080/index.php/admin/login">Bukan mahasiswa?</a></div>
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; SimTA 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('mahasiswa') ?>/js/scripts.js"></script>
</body>

</html>