<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website Desa Grendeng</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Green - v4.10.0
    * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">desa.grendeng@gmail.com</a>
            <i class="bi bi-phone-fill phone-icon"></i> +62822-8801-1776
        </div>
        <div class="social-links d-none d-md-block">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">DESA GRENDENG</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Profile</a></li>
                <li><a class="nav-link scrollto" href="#services">Lembaga Desa</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Statistik</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<div class="container mt-3">
    <section id="hero" class="rounded-5 overflow-hidden">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{ asset('img/slide/slide-1.jpeg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>Grendeng</span></h2>
                            <p class="animate__animated animate__fadeInUp">Grendeng adalah kelurahan di kecamatan Purwokerto Utara, Banyumas, Jawa Tengah, Indonesia. Grendeng merupakan daerah Kampus Grendeng dan pusat dari Universitas Jenderal Soedirman.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-2.png') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Kampus Grendeng</h2>
                            <p class="animate__animated animate__fadeInUp">Kampus Grendeng adalah lokasi kampus Unsoed yang berada di lingkungan wilayah Kelurahan Grendeng, Kecamatan Purwokerto Utara.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-3.jpeg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">SD Negeri 1 Grendeng</h2>
                            <p class="animate__animated animate__fadeInUp">SD Negeri 1 Grendeng adalah salah satu sekolah dasar yang terdapat di desa Grendeng, Purwokerto utara. SD Negeri 1 Grendeng merupakan sekolah dasar negeri dibawah Dinas Pendidikan Kabupaten Banyumas, dan masuk dalam Korwilcam Dindik Kecamatan Purwokerto Utara, Banyumas, Jawa tengah.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

</div>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Profile</h2>
                <p>Grendeng adalah kelurahan di kecamatan Purwokerto Utara, Banyumas, Jawa Tengah, Indonesia. Grendeng merupakan daerah Kampus Grendeng dan pusat dari Universitas Jenderal Soedirman.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 text-end">
                    <img src="{{ asset('img/profile.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Kampus Grendeng</h3>
                    <p class="fst-italic">
                        Kampus Grendeng adalah lokasi kampus Unsoed yang berada di lingkungan wilayah Kelurahan Grendeng, Kecamatan Purwokerto Utara.
                    </p>
                    <p>Kampus yang berada di wilayah Grendeng meliputi:</p>
                    <ol>
                        <li>Fakultas Ekonomi dan Bisnis</li>
                        <li>Fakultas Hukum</li>
                        <li>Fakultas Ilmu Sosial dan Ilmu Politik</li>
                    </ol>
                    <p>Adapun fasilitas yang terdapat di sekitar Kampus Grendeng Meliputi:</p>
                    <ol>
                        <li>Gedung Rektorat</li>
                        <li>Kantor Pusat Administrasi</li>
                        <li>Lembaga Pengembangan Pembelajaran dan Penjaminan Mutu</li>
                        <li>Gedung Graha Widyatama (Auditorium</li>
                        <li>Gedung Pertemuan Soemardjito</li>
                        <li>Gedung Perpustakaan</li>
                        <li>Gedung Roedhiro</li>
                        <li>UPT Pusat Komputer</li>
                        <li>UPT Penerbitan dan Percetakan</li>
                        <li>UPT Pemberdayaan Fasilitas</li>
                        <li>UPT Bahasa</li>
                        <li>Gedung SPMB</li>
                        <li>Gedung Unit Layanan Pengadaan</li>
                        <li>Gedung Layanan Pengadaan Secara Elektronik (LPSE)</li>
                    </ol>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Lembaga Kemasyarakatan Desa</h2>
                <p>LKD bertugas: melakukan pemberdayaan masyarakat Desa; Ikut serta dalam perencanaan dan pelaksanaan pembangunan; dan meningkatkan pelayanan masyarakat Desa. Dalam melaksanakan tugas sebagaimana dimaksud pada ayat (1) huruf b, LKD mengusulkan program dan kegiatan kepada Pemerintah Desa.</p>
            </div>

            <div class="row justify-content-center">
                <img src="{{ asset('img/lembaga-kemasyarakatan.png') }}" style="width: 80%" class="img-fluid" alt="">
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="portfolio" class="portfolio section-bg mt-5">
        <div class="container">

            <div class="section-title">
                <h2>Statistik Desa</h2>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-houses-fill"></i></div>
                        <h4 class="title"><a href="">Rukun Warga</a></h4>
                        <p class="description">100</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-people-fill"></i></div>
                        <h4 class="title"><a href="">Rumah Tangga</a></h4>
                        <p class="description">238</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-person-fill"></i></div>
                        <h4 class="title"><a href="">Penduduk</a></h4>
                        <p class="description">1893</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Kecamatan Purwokerto Utara, Banyumas, Jawa Tengah, Indonesia.</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>desa.grendeng@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon:</h4>
                            <p>+6822-8801-1776</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.144729843625!2d109.24126217706107!3d-7.405749864505995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ee57bce42c7%3A0xe4e07c9e1e4f89d3!2sGrendeng%2C%20Purwokerto%20Utara%2C%20Banyumas%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1674320590121!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subjek</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Pesan</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Grendeng</h3>
        <p>Grendeng adalah kelurahan di kecamatan Purwokerto Utara, Banyumas, Jawa Tengah, Indonesia.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Desa Grendeng</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
