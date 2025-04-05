<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SimTA Sistem Informasi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('home') ?>/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">Layanan Tugas Akhir Departemen Sistem Informasi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">Member</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sidang Proposal</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="">Daftar Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="http://localhost:8080/berkas/index">Check Revisi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="portfolio-overview.html">Account Settings</a></li>
                                <li><a class="dropdown-item" href="login">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-7 fw-bolder text-white mb-2">Selamat Datang di Lab RDIB</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Laboratorium Rekayasa Data dan Intelegensi Bisnis</p>
                            <p class="lead fw-normal text-white-50 mb-4 text-justified">Pada halaman ini anda dapat melihat info seputar lab mulai dari kuota dosen sampai dengan referensi tugas akhir.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Jadwal Sidang</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://si.its.ac.id/labs/spk/SimTA/assets/img/brand/blue.png" alt="..." /></div>
                </div>
            </div>
            <div class="rounded container px-5 bg-info text-white">
                <div class="my-5 text-center text-xl-start">
                    <p class="fw-bolder text-dark">Nama Dosen: Akhdan Arifuddin</p>
                    <p class="fw-bolder text-dark">NIP : 195810051986031003</p>
                    <p class="fw-bolder text-dark">NIDN : 0005105810</p>
                </div>
                <div class="col-xl-2 col-xxl-2 d-none d-xl-block"><img class="img-fluid rounded-1 my-2 float-right" src="data:image/jpeg;base64,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" alt="..." /></div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">A better way to achieve your success.</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Working with Start Bootstrap templates has saved me tons of development time when building new projects! Starting with a Bootstrap template just makes things easier!"</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="fw-bold">
                                    Tom Ato
                                    <span class="fw-bold text-primary mx-1">/</span>
                                    CEO, Pomodoro
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">From our blog</h2>
                            <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Blog post title</h5>
                                </a>
                                <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Kelly Rowan</div>
                                            <div class="text-muted">March 12, 2022 &middot; 6 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Another blog post title</h5>
                                </a>
                                <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Josiah Barclay</div>
                                            <div class="text-muted">March 23, 2022 &middot; 4 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">The last blog post title is a little bit longer than the others</h5>
                                </a>
                                <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">Evelyn Martinez</div>
                                            <div class="text-muted">April 2, 2022 &middot; 10 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to action-->
                <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                        <div class="mb-4 mb-xl-0">
                            <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                            <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                        </div>
                        <div class="ms-xl-4">
                            <div class="input-group mb-2">
                                <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                            </div>
                            <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2022</div>
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