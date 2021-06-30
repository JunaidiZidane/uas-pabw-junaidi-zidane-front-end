<?php 
    require_once("auth.php"); 
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Head -->
    <?php
        include "request/head.php";
    ?>
    <body id="page-top">

        <!-- Navigation-->
        <?php
            include "request/navbar.php";
        

        // <!-- Masthead-->
        
            include "request/header.php";
        ?>    

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Review Cars</h2>
                <br>
                <br>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/lambo.jpg" alt="supra" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/mazda.jpg" alt="minicooper" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/ferarri.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/supra.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/koeniggsegg.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/bmwandprosche.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Lamborghini</h2>
                                    <br>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/galeri/lambo.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" style="text-align: justify;">Lamborghini adalah sebuah pembuat mobil di Italia. Perusahaan ini didirikan oleh Ferruccio Lamborghini pada tahun 1963, dengan tujuan untuk menghasilkan mobil grand wisata yang dapat bersaing dengan mobil yang telah ada dipasaran terlebih dahulu seperti Ferrari.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Mazda</h2>
                                    <br>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/galeri/mazda.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" style="text-align: justify;">Mazda Motor Corporation merupakan perusahaan otomotif Jepang. Perusahaan ini didirikan tahun 1920 dan bermarkas di Hiroshima, Jepang. Perusahaan ini mempekerjakan 39.364 pekerjanya pada 31 Maret 2008. Pada tahun 2007, Mazda memproduksi 1,3 juta mobil untuk seluruh dunia. Sebagian besar dari produksi tersebut (hampir 1 juta) diproduksi di pabriknya di Jepang, dengan sisanya di pabriknya yang lain di seluruh dunia.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Ferrari</h2>
                                    <br>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/galeri/banner2.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" style="text-align: justify;">Ferrari adalah sebuah produsen mobil super dan mobil balap asal Italia berperforma tinggi yang berbasis di Maranello, Italia. Ferrari didirikan oleh Enzo Ferrari pada tahun 1929, sebagai "Scuderia Ferrari", perusahaan yang mensponsori para pembalap dan membuat mobil balap sebelum pindah ke produksi kendaraan komersial yang dikenali sebagai Ferrari pada tahun 1947. Sepanjang sejarahnya, perusahaan ini telah berpartisipasi paling lama dalam dunia balap, terutama di Formula Satu, di mana telah sukses besar.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Toyota</h2>
                                    <br>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/galeri/supra.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" style="text-align: justify;">Toyota Motor Corporation (TMC) adalah sebuah pabrikan mobil yang berasal dari Jepang, yang berpusat di Toyota, Aichi. Saat ini, Toyota merupakan pabrikan penghasil mobil terbesar di dunia. <br>
                                    Di samping memproduksi mobil, Toyota juga memberikan pelayanan finansial, dan juga membuat robot. TMC merupakan anggota dari Grup Toyota dan memproduksi mobil dengan merek Toyota, Lexus dan Scion, Daihatsu dan Hino, dan memiliki sebagian kecil saham Subaru dan Isuzu.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Koeniggsegg</h2>
                                    <br>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/galeri/koeniggsegg.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" style="text-align: justify;">Koenigsegg Automotive AB bahasa Inggris: [ˈkʌnɪɡsɛɡ]) adalah perusahaan mobil sport berperforma tinggi yang berasal dari Swedia. Perusahaan ini bermarkas di Ängelholm.
                                    <br>
                                    Perusahaan ini didirikan pada tahun 1994 di Swedia oleh Christian von Koenigsegg, dengan tujuan untuk menciptakan mobil super berkualitas dunia.
                                    <br>
                                    Tahun 2006, Koenigsegg memulai produksi CCX, yang mesinnya memang dibuat khusus untuk mobil itu saja. CCX legal untuk dikendarai di jalanan umum di banyak negara, termasuk di Amerika Serikat.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">BMW</h2>
                                    <br>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/galeri/bmwandprosche.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5" style="text-align: justify;">BMW (singkatan untuk Bayerische Motoren Werke, atau dalam Bahasa Inggris, Bavarian Motor Works), adalah sebuah perusahaan otomotif Jerman yang memproduksi mobil dan sepeda motor. BMW didirikan pada tahun 1916 oleh Franz Josef Popp. BMW AG adalah perusahaan induk dari merk mobil MINI dan Rolls-Royce, dan, dulunya Rover. BMW dikenal sebagai salah satu perusahaan mobil mewah dengan performa tinggi, dan juga salah satu perusahaan mobil pertama yang menggunakan teknologi ABS.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- Article Section -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Berita Otomotif</h2>
                <br>
                <br>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- News Item 1-->
                     <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto">
                            <div class="d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center text-white"></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/toyotssupra.jpg" alt="" />
                            <div class="caption">
                                <br><h4> Apa yang tidak bisa dilakukan Toyota Supra jangka panjang kita?</h4>
                                  <p class="text-justify">TES JANGKA PANJANG Ingin mengikuti track day? Mobil sport lurus enam kami akan membawa Anda ke sana, mengasyikkan, dan membuat Anda kembali tanpa masalah. </p>
                            </div>
                        </div>
                    </div>

                     <!-- News Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto">
                            <div class="d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center text-white"></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/carwash.jpg" alt="" />
                            <div class="caption">
                            <br><h4> Apakah pencucian mobil otomatis merusak cat Anda? MASALAH-MASALAH MOTOR</h4>
                               <p class="text-justify">Meskipun pencucian mobil otomatis itu murah dan nyaman, itu kemungkinan besar akan membebani Anda dalam jangka panjang.</p>
                            </div>
                        </div>
                    </div>

                     <!-- News Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto">
                            <div class="d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center text-white"></div>
                            </div>
                            <img class="img-fluid" src="assets/img/galeri/minicooper.jpg" alt="" />
                            <div class="caption">
                            <br><h4> Ulasan Mini John Cooper Works hatch (2021) Kesenangan yang Sanitasi</h4>
                              <p class="text-justify">TINJAUAN MOBIL 2021 memperkenalkan rangkaian Mini yang digigit dan terselip - apakah JCW mempertahankan kegembiraannya ?.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

    <!-- section row -->
    <section class="container my-5" id="blog">
        <div class="row py-5">
            <div class="col-12 col-md-6">
                <small class="text-black-50">Terpanas</small>
                <h2 class="text-black">Apa yang BARU Didunia Otomotif ?</h2>
            </div>
            <div class="col-12 col-md-6 pt-4">
                <div class="d-flex align-items-start">
                    <small class="text-black-50 text-nowrap"><i class="far fa-calendar-alt mr-2"></i>29 Jun</small>
                    <h5 class="text-black ml-3 ml-md-5">Cars : <br> Caterham 360S jangka panjang kami: perhatian saat bergerak</h5>
                    <a href="#" title="Read more" class="x-color ml-auto"><i
                            class="far fa-arrow-alt-circle-right"></i></a>
                </div>
                <hr class="border-secondary my-4">

                <div class="d-flex align-items-start">
                    <small class="text-black-50 text-nowrap"><i class="far fa-calendar-alt mr-2"></i>27 Jun</small>
                    <h5 class="text-black ml-3 ml-md-5">Berita  : <br> Klasemen Sementara MotoGP 2021, Francesco Bagnaia Rebut Puncak Klasemen dari Fabio Quartararo</h5>
                    <a href="#" title="Read more" class="x-color ml-auto"><i
                            class="far fa-arrow-alt-circle-right"></i></a>
                </div>
                <hr class="border-secondary my-4">

                <div class="d-flex align-items-start">
                    <small class="text-black-50 text-nowrap"><i class="far fa-calendar-alt mr-2"></i>10 Jun</small>
                    <h5 class="text-black ml-3 ml-md-5">Berita : <br> 4 Alasan Juara MotoGP Spanyol 2021 Sampai Tertunduk Lesu Di Parc Ferme.</h5>
                    <a href="#" title="Read more" class="x-color ml-auto"><i
                            class="far fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    

          <!-- About Section-->
                <section class="page-section mb-0" id="about">
                    <div class="container">
                        <!-- About Section Heading-->
                        <h2 class="page-section-heading text-center text-uppercase">Tentang Blog Ini</h2>
                        <br>
                        <br>
                        <!-- About Section Content-->
                        <div class="row">
                            <div class="col-lg-4 ml-auto"><p class="lead">Blog ini adalah sebuah website yang akan memudahkan mencari berbagai berita, review mobil, dan seputar Dunia Otomotif. <br> Dan website ini saya direkomendasikan bagi pencinta otomotif seperti saya dan anda tentunya.</p></div>
                            <div class="col-lg-4 mr-auto"><p class="lead">Dan disini juga dilihat foto / gambar dari berbagai kendaraan yang sangat populer dan menjadi idaman bagi semua orang.</p></div>
                        </div>
                    </div>
                </section>

  

        <!-- footer -->
        <?php
            include "request/footer.php";
        ?>    


    </body>
</html>
