<?php 
require_once("./conf.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fakta.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Rumah Sehat</title>

    <!--web icon-->
    <link rel="icon" href="img/1.png">
  </head>
  <body>
    <!-- NAVBAR -->
      <div class="container my-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent animate__animated animate__fadeInDown">
            <a class="navbar-brand" href="#home">
              <img src="img/1.png" alt="logo" style="width: 45px; height: 45px;">
              <span>Rumah Sehat</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link slide-scroll" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link slide-scroll" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link slide-scroll" href="#berita">Berita</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link btn-primary contact-button" href="#">Hubungi Kami</a>
                </li>
              </ul>
            </div>
          </nav>
      </div>
      <!-- End NAVBAR -->

      <!-- Upper Content -->
      <div class="container banner animate__animated animate__fadeIn animate__delay-1s">
      <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="img/banner2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner8.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
       
      </div><br>
      <!-- End Upper Content -->

      

      <!-- PAGE FAKTA & MITOS / VAKSIN -->

      <div class="container-fluid bg-blue bg-waves">
      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 animation">
              <h3>FAKTA & MITOS COVID 19</h3>
              <p class="bg-dark border-title"></p>
            </div>
        </div>
        <div class="row">
          <div class="col-12 animation">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis illo odit ipsam aliquid reprehenderit ratione. Illum incidunt, similique magnam impedit quisquam ducimus placeat cumque itaque quis nemo corporis quia doloribus eligendi nesciunt vero mollitia tempora aliquam quo nulla dolor natus fugit saepe consequatur id. Praesentium non possimus itaque illum officiis!</p>
          </div>
        </div><br>
      <div class="card animation">
        <div class="card-body">
          <div class="row">
              <div class="media">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Mitos:</h5>
                  Orang yang sudah pernah positif COVID-19 tidak akan terjangkit lagi<br>
                  <h5 > Fakta: </h5> Antibodi yang terbentuk di dalam tubuh orang yang sudah sembuh dari COVID-19 hanya mampu mengurangi risiko terinfeksi kembali, sama halnya dengan pemberian vaksin.

                </div>
              <img src="img/icon/cov1.png" class="ml-3" alt="...">
            </div>
          </div>
          </div>
      </div><br><br>
        
      <div class="card animation">
        <div class="card-body">
          <div class="row">
            <div class="media">
              <img src="img/icon/jauh1.png" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Mitos: </h5>
                 Orang yang pernah terinfeksi COVID-19 tidak bisa sembuh
                <h5>Fakta: </h5> Kebanyakan orang yang terkena COVID-19 bisa sembuh. Penanganan sedini mungkin adalah kunci keberhasilan perawatan COVID-19. Jika Anda terkena batuk, demam, dan sesak napas, segera cari bantuan medis lewat telepon terlebih dahulu.

              </div>
            </div>
          </div>
        </div>
      </div><br><br>

      <div class="card animation">
        <div class="card-body">
          <div class="row">
              <div class="media">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Mitos: </h5>
                Infeksi COVID-19 pasti disertai dengan gejala berat
                <h5>Fakta: </h5> Pengidap COVID-19 bisa saja merasa sehat dan tetap beraktivitas seperti biasa tanpa mengetahui ia sudah berstatus OTG (Orang Tanpa Gejala).

                </div>
              <img src="img/icon/sakit1.png" class="ml-3" alt="...">
            </div>
          </div>
          </div>
      </div><br><br>
        
      <div class="card animation">
        <div class="card-body">
          <div class="row">
            <div class="media">
              <img src="img/icon/wash2.png" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Mitos: </h5>
                Lebih baik menggunakan hand sanitizer daripada mencuci tangan dengan sabun untuk menghilangkan virus Corona
                <h5>Fakta: </h5> Bila tangan terlalu kotor atau berminyak, alkohol yang terkandung di dalam hand sanitizer tidak dapat bekerja dengan optimal untuk membunuh kuman, termasuk virus Corona. Mencuci tangan dengan air dan sabun selama minimal 20 detik lebih dianjurkan karena memang lebih ampuh untuk membersihkan tangan dari kuman

              </div>
            </div>
          </div>
        </div>
      </div><br><br>
      </div>
      

        <!-- PAGE FAKTA & MITOS -->
        <!-- <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-8 animation">
              <h3>FAKTA & MITOS COVID 19</h3>
              <p class="bg-dark border-title"></p>
            </div> -->
            <!-- <div class="col-4 text-right animation">
              <a class="text-dark" href="fakta.php">LIHAT SELENGKAPNYA</a>
            </div> -->
          <!-- </div>
          <div class="row">
            <div class="col-4 p-3 animation">
              <div class="card" style="width: 100%;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- PAGE VAKSIN -->
        <!-- <div class="container pt-5 pb-5">
          <div class="row">
            <div class="col-8 animation">
              <h3>DIVAKSIN YUK!</h3>
              <p class="bg-dark border-title"></p>
            </div>
            <div class="col-4 text-right animation">
              <a class="text-dark" href="#">LIHAT SELENGKAPNYA</a>
            </div>
          </div>
          <div class="row">
            <div class="col-4 p-3 animation">
              <div class="card" style="width: 100%;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <!-- PAGE FOOTER -->
      <div class="container-fluid bg-light shadow-lg">
        <div class="container pt-3">
          <div class="row">
            <div class="col-6">
              <p>COPYRIGHT © 2021</p>
            </div>
            <div class="col-6  text-right">
              <p>POWER BY Muh. Rafi P, Ade R. W, Izzati A.</p>
            </div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
    

      //Number Format
      function numberWithCommas(x){
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }

      //ANIMATION
      $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        $('.animation').each(function(){
          var elTop = $(this).offset().top - 500;
          if(scroll > elTop){
            $(this).addClass('animate__animated animate__fadeInUp');
          }
        });
      });
    </script>
  </body>
</html>