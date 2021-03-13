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
    <link rel="stylesheet" href="css/main.css">
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
      <div class="container">
        <div class="row custom-section">
          <div class="col-12 col-lg-4">
            <h2 class="animate__animated animate__fadeInUp">Rumah Sehat</h2>
            <h3 class="animate__animated animate__fadeIn animate__delay-1s">Periksa kesehatan anda dengan mudah</h3>
            <p class="animate__animated animate__fadeIn animate__delay-2s">Rumah sehat memeberikan anda kemudahan</p>
            <a class="slide-scroll animate__animated animate__fadeInUp animate__delay-3s" href="periksa">Periksa Sekarang!</a>
          </div>
        </div>
      </div><br>
      <!-- End Upper Content -->

      <div class="container p-5 mt-5">
        <div class="row p-lg-2 pt-lg-5 pb-lg-3 mt-5">
            <div class="col text-center pt-5 mt-5 pb-0 animation">
              <h3>DATA COVID 19 - INDONESIA</h3>
              <p><?= redate(date('Y-m-d')) . ", PUKUL " . date('H.i') . " WIB";?></p>
            </div>
        </div>
        <div class="row pb-5">
          <div class="col pb-5 pt-5">
            <div class="row">
              <div class="col-3 p-1 animation">
                <div class="bg-white shadow-sm p-3 rounded">
                  <h2 id="pasien_positif"><span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true"></span></h2>
                  <small>TOTAL KASUS AKTIF</small>
                </div>
              </div>
              <div class="col-3 p-1 animation">
                <div class="bg-white shadow-sm p-3 rounded">
                  <h2 id="pasien_sembuh"><span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true"></span></h2>
                  <small>TOTAL PASIEN SEMBUH</small>
                </div>
              </div>
              <div class="col-3 p-1 animation">
                <div class="bg-white shadow-sm p-3 rounded">
                  <h2 id="pasien_meninggal"><span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true"></span></h2>
                  <small>TOTAL PASIEN MENINGGAL</small>
                </div>
              </div>
              <div class="col-3 p-1 animation">
                <div class="bg-white shadow-sm p-3 rounded">
                <h2 id="pasien_terkonfirmasi"><span class="spinner-border spinner-border-sm text-dark" role="status" aria-hidden="true"></span></h2>
                  <small>TOTAL PASIEN TERKONFIRMASI</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PAGE FAKTA & MITOS / VAKSIN -->

      <div class="container-fluid bg-blue bg-waves">

        <div class="row">
        <div class="container-fluid bg-blue p-5 pr-0 pl-0">
        <div class="container">
          <div class="row">
            <div class="col-8 pt-5 pb-5 text-left text-mobile-center mt-4 animation">
              <h3 class="mt-2">ANDA SEDANG SAKIT RINGAN? YUK CEK!</h3>
            </div>
            <div class="col-4 pt-5 pb-5 text-right text-mobile-center animation">
              <a class="btn btn-primary btn-custom mt-4" href="periksa">CEK SEKARANG</a>
            </div>
          </div>
        </div>
      </div>
        </div>

        
        <div class="container pt-5 pb-5">
          <div class="row">
        

            <!-- <div class="col-4 text-right animation">
              <a class="text-dark" href="fakta.php">LIHAT SELENGKAPNYA</a>
            </div> -->
          </div>
          <div class="row">
            <div class="col-6">
              <div class="row">
              <div class="col-12 animation">
                  <h3>FAKTA & MITOS COVID 19</h3>
                  <p class="bg-dark border-title"></p>
              </div>
            <!-- PAGE FAKTA & MITOS -->
                <div class="col-12 p-3 animation">
                  <div class="card" style="width: 100%;">
                    <img src="img/fact1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="fakta" class="btn btn-fact ml-0 float-right">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 animation">
              <div class="row">
                <div class="col-12 animation mb-3">
                  <h3>DIVAKSIN YUK!</h3>
                  <p class="bg-dark border-title"></p>
                </div>
                <div class="col-12">
                  <div class="card" style="width: 100%;">
                  <img src="img/vac2.jpg" class="card-img-top" alt="..." style="height: 343px;">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="vaksin" class="btn btn-fact ml-0 float-right">Selengkapnya</a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          </div>

        

        
        <div class="container pt-5 pb-5">
          <div class="row">
            <!-- <div class="col-8 animation">
              <h3>DIVAKSIN YUK!</h3>
              <p class="bg-dark border-title"></p>
            </div> -->
            <!-- <div class="col-4 text-right animation">
              <a class="text-dark" href="#">LIHAT SELENGKAPNYA</a>
            </div> -->
          </div>
          <div class="row">
            <!-- <div class="col-4 p-3 animation">
              <div class="card" style="width: 100%;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div> -->
          </div>
        </>
      </div>

      <!-- PAGE FOOTER -->
      <!-- <div class="container-fluid bg-blue p-5 pr-0 pl-0">
        <div class="container">
          <div class="row">
            <div class="col-8 pt-5 pb-5 text-left mt-4 animation">
              <h3 class="mt-2">ANDA SEDANG SAKIT RINGAN? YUK CEK!</h3>
            </div>
            <div class="col-4 pt-5 pb-5 text-right animation">
              <a class="btn btn-primary btn-custom mt-4" href="#explore">CEK SEKARANG</a>
            </div>
          </div>
        </div>
      </div> -->
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
      //API COVID
      $.getJSON("api.php",
        function (data, textStatus, jqXHR) {
          $('#pasien_terkonfirmasi').html(numberWithCommas(data[0].confirmed));
          $('#pasien_sembuh').html(numberWithCommas(data[0].recovered));
          $('#pasien_meninggal').html(numberWithCommas(data[0].deaths));
          $('#pasien_positif').html(numberWithCommas(data[0].confirmed - (data[0].deaths + data[0].recovered)));
        }
      );

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