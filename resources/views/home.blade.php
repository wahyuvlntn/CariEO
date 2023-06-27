@extends('layouts.main')
@section('container')
    <!-- Hero Section -->
    <section id="hero" class="hero">
            <div class="container position-relative">
                <div class="row gy-5" data-aos="fade-in">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                        <h2>Welcome to <span>CariEO</span></h2>
                        <p>
                            Sulit mencari Event Organizer (EO) yang sesuai dengan kebutuhanmu?
                            CariEO solusinya!
                        </p>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="#about" class="btn-get-started">Mulai</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <main id="main">

            <!-- About Us Section -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
          
                    <div class="section-header">
                        <h2>About Us</h2>
                        <p>CariEO adalah platform inovatif yang memberikan layanan unggulan bagi pemesan yang mencari Event Organizer (EO) untuk acara-acara yang mereka inginkan.</p>
                    </div>
          
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <h3>Apa yang CariEO tawarkan?</h3>
                            <img src="/img/favicon.png" class="img-fluid rounded-4 mb-4" alt="">
                            <p>CariEO menawarkan kemudahan dalam mencari, memesan, dan mengatur acara mereka tanpa perlu melihat informasi vendor atau berkomunikasi langsung dengan vendor.</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="content ps-0 ps-lg-5">
                                <p class="fst-italic">
                                Berikut merupakan kelebihan website CariEO untuk pemesan:
                                </p>
                                <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Pemesan dapat memiliki kepercayaan penuh bahwa mereka akan bekerja dengan EO profesional dan terpercaya.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Pemesan hanya perlu memberikan detail tentang acara mereka, dan CariEO akan mengatur semuanya secara efisien, mulai dari jadwal hingga perincian logistik.</li>
                                </ul>
                                <p>
                                    CariEO memberikan solusi praktis dan terpercaya bagi  pemesan yang ingin merayakan 
                                    acara mereka tanpa repot mencari vendor atau berkomunikasi langsung dengan mereka.
                                </p>
                                <div class="position-relative mt-4">
                                <img src="/img/about1.png" class="img-fluid rounded-4" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Us Section -->

            <!-- Carousel Section -->
            <section id="clients" class="clients">
                <div class="container">
                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img class="rounded" src="/img/home/wedding1.jpg" style="height: 150px;" alt=""></div>
                            <div class="swiper-slide"><img class="rounded" src="/img/home/birthday1.jpg" style="height: 150px;" alt=""></div>
                            <div class="swiper-slide"><img class="rounded" src="/img/home/birthday2.jpg" style="height: 150px;" alt=""></div>
                            <div class="swiper-slide"><img class="rounded" src="/img/home/wedding2.jpg" style="height: 150px;" alt=""></div>
                            <div class="swiper-slide"><img class="rounded" src="/img/home/wedding3.jpg" style="height: 150px;" alt=""></div>
                            <div class="swiper-slide"><img class="rounded" src="/img/home/birthday3.jpg" style="height: 150px;" alt=""></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Clients Section -->

            <!-- Stats Section -->
            <section id="stats-counter" class="stats-counter">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6">
                            <img src="/img/stats-img.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <div class="stats-item d-flex align-items-center">
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Event Organizer</strong> sudah mendaftarkan akunnya di CariEO</p>
                            </div><!-- End Stats Item -->           
                            <div class="stats-item d-flex align-items-center">
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Pembeli</strong> sudah mempercayakan pemesanannya di CariEO</p>
                            </div><!-- End Stats Item -->
            
                            <div class="stats-item d-flex align-items-center">
                                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Pemesanan</strong> berhasil dibuat dengan adanya CariEO</p>
                            </div><!-- End Stats Item -->           
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Stats Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Testimonial</h2>
                <p>Berikut merupakan testimoni dari mereka yang telah melakukan pemesanan acara dengan CariEO.</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Bang Girang</h3>
                            <h4>Actor</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            </div>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            CariEO sangat membantu saya dalam mencari tema acara yang ingin saya buat dan saya adakan!
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Mbak Ayu</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            </div>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Website ini sangat membantu saya dalam melakukan pemesanan acara :)
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Neng Geulis</h3>
                            <h4>Singer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            </div>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            HEBAT!!! saya tidak menyangka bahwa website ini sangat membantu saya dalam mencari vendor EO yang sesuai dengan kebutuhan saya.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Babang Tampan</h3>
                            <h4>Content Creator</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            </div>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Kok bisa ya ada website seperti ini yang belum terpikirkan oleh saya sebelumnya.. ini adalah website dengan ide yang cemerlang!!
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <div class="d-flex align-items-center">
                            <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                            <div>
                            <h3>Mas Cool</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            </div>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Saya pun takjub dengan website CariEO ini.. saya tidak perlu repot-repot mencari vendor EO yang sesuai dengan kebutuhan saya, karena CariEO telah mengatur semuanya dengan baik.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
            </section><!-- End Testimonials Section -->

            <!-- Frequently Asked Questions Section -->
            <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="content px-xl-5">
                    <h3>Frequently Asked <strong>Questions</strong></h3>
                    <p>
                        Beberapa Pertanyaan umum yang sering diajukan mengenai hal-hal yang berkaitan dengan CariEO.
                    </p>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                            <span class="num">1.</span>
                            Apa saja jenis acara yang dapat diorganisir oleh Event Organizer?
                        </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                        Event Organizer dapat mengorganisir berbagai jenis acara, konser, pernikahan, ulang tahun, dan banyak lagi.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                            <span class="num">2.</span>
                            Bagaimana proses kerja Event Organizer dalam mengorganisir suatu acara?
                        </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                        Proses kerja Event Organizer dimulai dengan identifikasi kebutuhan klien dan tujuan acara. Kemudian, mereka membuat rencana acara yang meliputi anggaran, lokasi, tema, jadwal, pemilihan vendor, dan lain-lain.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                            <span class="num">3.</span>
                            Apakah Event Organizer Anda memiliki pengalaman dalam mengorganisir acara serupa dengan yang saya rencanakan?
                        </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                        Ya, kami memiliki pengalaman yang luas dalam mengorganisir berbagai jenis acara, mulai dari Farewell Party dan konser hingga pernikahan dan pesta ulang tahun. Tim kami terdiri dari profesional yang berdedikasi dengan portofolio yang solid dalam mengelola acara-acara sukses.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                            <span class="num">4.</span>
                            Bagaimana proses kerjasama dengan Event Organizer Anda?
                        </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                        Kami memulai dengan pertemuan atau konsultasi awal untuk memahami kebutuhan dan harapan Anda. Setelah itu, kami akan merancang proposal yang mencakup konsep acara, anggaran perkiraan, dan detail pelaksanaan. Setelah Anda menyetujui proposal, kami akan mulai mengatur semua aspek acara dan terus berkomunikasi dengan Anda selama proses persiapan.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                            <span class="num">5.</span>
                            Apa yang harus saya pertimbangkan ketika memilih Event Organizer untuk acara saya?
                        </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">
                        Beberapa hal yang perlu dipertimbangkan adalah pengalaman Event Organizer dalam mengorganisir acara sejenis, referensi dan testimonial dari klien sebelumnya, kemampuan untuk bekerja sesuai dengan anggaran Anda, keahlian dalam menghadapi tantangan yang mungkin muncul, fleksibilitas dalam menyesuaikan dengan preferensi Anda, dan kemampuan untuk memberikan solusi kreatif dan inovatif.
                        </div>
                        </div>
                    </div><!-- # Faq item-->

                    </div>

                </div>
                </div>

            </div>
            </section>
            <!-- End Frequently Asked Questions Section -->

            <!-- Contact Section -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Contact</h2>
                <p>Kirim pesanmu disini! Segala kritik dan saran akan kami terima untuk menjadikan kami lebih baik kedepannya!</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                        <h4>Lokasi:</h4>
                        <p>Griya Shanta Eksekutif P 303, Lowokwaru, Malang, Jawa Timur, ID 65141</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                        <h4>Email:</h4>
                        <p>carieo@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                        <h4>Telepon:</h4>
                        <p>+62 812 9999 999</p>
                        </div>
                    </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Pesanmu berhasil dikirim. Terimakasih!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim</button></div>
                    </form>
                </div><!-- End Contact Form -->

                </div>

            </div>
            </section><!-- End Contact Section -->
        
        </main>
@endsection
