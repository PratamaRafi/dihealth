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
    <link rel="stylesheet" href="css/vaksin.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Rumah Sehat</title>

    <!--web icon-->
    <link rel="icon" href="img/1.png">
  </head>
  <body>
       <!-- NAVBAR -->
       <?php include('navbar.php');?>
      <!-- End NAVBAR -->

      <!-- Upper Content -->
      <div class="container p-4">

      <div class="container banner animate__animated animate__fadeIn animate__delay-1s">
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="img/vaksin.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner6.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              

            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Dinacom cara dapet vaksin.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
              
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
              <h3>FAKTA & MITOS VAKSIN</h3>
              <p class="bg-dark border-title"></p>
            </div>
        </div>
        <div class="row">
          <div class="col-12 animation" style="text-align: justify !important; text-justify: inter-word;">
            <p>Di zaman sekarang ini, sering sekali kita memperoleh informasi yang belum tentu benar, namun sudah menyebar dengan mudahnya di masyarakat. Jika informasi yang beredar itu salah, dapat menyesatkan orang lain dan memicu kesalahpahaman di masyarakat. Dalam mitos dan fakta vaksin COVID-19 ini, kami telah merangkum informasi-informasi yang beredar dan mencari tahu kebenarannya melalui sumber-sumber yang terpercaya.</p>
          </div>
        </div><br>
          
      <div class="card animation">
        <div class="card-body">
          <div class="row">
            <div class="media">
              <img src="img/icon/vac1.png" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Mitos: </h5>
                Orang yang merasa kebal tidak perlu ikut vaksinasi COVID-19
                <h5>Fakta: </h5> Menggunakan vaksin virus corona dapat melindungi diri sendiri dan orang-orang sekitar. Sebab, bisa meminimalisir penularan penyakit yang ditularkan dari satu orang ke orang lain. Semakin banyak orang yang divaksinasi, maka semakin kecil kemungkinan tertular suatu penyakit.

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
                  <h5 class="mt-0 mb-1">Mitos:</h5>
                  Pernah terinfeksi virus corona, tidak perlu menerima suntikan vaksin<br>
                  <h5 > Fakta: </h5> pasien COVID-19 memang telah memiliki antibodi setelah tertular virus corona. Akan tetapi, antibodi tersebut hanya dapat bertahan dalam jangka waktu 3-4 bulan saja, selebihnya seseorang akan kembali rentan terkena infeksi.

                </div>
              <img src="img/icon/novac.png" class="ml-3" alt="...">
            </div>
          </div>
          </div>
      </div><br><br>

      <div class="card animation">
        <div class="card-body">
          <div class="row">
            <div class="media">
              <img src="img/icon/nomask.png" class="mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-0">Mitos: </h5>
                Seseorang yang sudah divaksin tidak perlu memakai masker saat berpergian
                <h5>Fakta: </h5> Mengenakan masker dan mengikuti protocol kesehatan lainnya seperti mencuci tangan dan menjaga jarak fisik masih dibutuhkan hingga cukup banyak penduduk yang telah divaksinasi atau sampai kondisi pandemi membaik.

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
                  Lebih baik tertular COVID-19 untuk mendapatkan kekebalan daripada mendapatkan vaksinasi
                <h5>Fakta: </h5> Vaksin membangun kekebalan tanpa menimbulkan efek dari penyakit itu. COVID-19 dapat menyebabkan kesehatan jangka panjang yang masalah serius, bahkan berakibat fatal. Semua ini dapat dihindari dengan mendapatkan divaksinasi.

                </div>
              <img src="img/icon/virus.png" class="ml-3" alt="...">
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
    <?php require('footer.php'); ?>
