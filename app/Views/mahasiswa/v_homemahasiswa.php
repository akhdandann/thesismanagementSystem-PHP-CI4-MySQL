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
                        <li class="nav-item"><a class="nav-link" href="about.html">Kuota</a></li>
                        <li class="nav-item"><a class="nav-link" href="pricing.html">Referensi</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">Member</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sidang Proposal</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="blog-home.html">Jadwal Sidang</a></li>
                                <li><a class="dropdown-item" href="http://localhost:8080/berkasmhs/check">Revisi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="portfolio-overview.html">Account Settings</a></li>
                                <li><a class="dropdown-item" href="loginmhs">Logout</a></li>
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
                            <p class="lead fw-normal text-white-50 mb-4 text-justify">Pada halaman ini anda dapat melihat info seputar lab mulai dari kuota dosen sampai dengan referensi tugas akhir.</p>
                            <p class="text-justify lead fw-normal text-white-50 mb-4">Bagi yang sudah memenuhi persyaratan sidang proposal, maka bisa melakukan proses pengumpulan dokumen dengan menekan tombol dibawah ini.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Submit Dokumen</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Prosedur</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://si.its.ac.id/labs/spk/SimTA/assets/img/brand/blue.png" alt="..." /></div>
                </div>
                <div class="rounded container px-5 bg-info text-white">
                    <div class="my-5 text-center text-xl-start">
                        <div class="col-xl-2 col-xxl-2 d-none d-xl-block text-center"><img class="img-fluid rounded-1 my-2" src="data:image/jpeg;base64,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" alt="..." /></div>
                        <p class="fw-bolder text-dark">Nama Mahasiswa: Arifuddin Akhdan</p>
                        <p class="fw-bolder text-dark">Status:</p>
                        <p class="fw-bolder text-danger">Menunggu Revisi</p>
                    </div>
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