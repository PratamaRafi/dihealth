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
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner10.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        </div>
      </div>
       
      </div><br>
      <!-- End Upper Content -->

      

      <!-- PAGE FAKTA & MITOS / VAKSIN -->

      <div class="container-fluid bg-blue bg-waves">
      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 animation">
              <h3>PERIKSA KESEHATAN ANDA</h3>
              <p class="bg-dark border-title"></p>
            </div>
        </div>
        <div class="row">
          <div class="col-12 animation" style="text-align: justify !important; text-justify: inter-word;">
            <p>Pilihlah keluhan yang Anda alami di kotak ini. Kami akan menampilkan beberapa penyakit ringan yang memiliki keluhan seperti yang Anda pilih dengan menyertai intervensi sederhana dan rekomendasi obat yang dapat Anda dibeli di apotek.</p>
          </div>
        </div>
        <div class="card animation mt-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">PILIH KELUHAN : </label>
                <select class="form-control" id="daftarKeluhan">
                    <option value=''>Daftar Keluhan</option>
                </select>
            </div>
                <div class="form-group row">
                <div class="col-8">
                    <div id="pilihanKeluhan">                    
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-periksa btn-primary float-right">Periksa Sekarang</button>
                </div>
            </div>
        </div>    
        <div class="item"></div>  

      </div>

      <div class="loading mt-5"></div>
      

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
    var keluhan = [];
    var dataKeluhan = [];

    
    $.getJSON("http://dihealth.dicampus.id/api.php?act=datakeluhan",
        function (data, textStatus, jqXHR) {
            data.forEach(e => {
                $('select').append(`<option value='${e.nama_keluhan}'>${e.nama_keluhan}</option>`);
            });
        }
    );

      $('#daftarKeluhan').on('change',function(){
        let value = $(this,'option').val();
        if(value !== ""){
            if(!keluhan.includes(value)){
                keluhan.push(value);
                $('#pilihanKeluhan').append(`<div class='btn btn-danger btn-keluhan mr-2 mb-2' data-value='${value}'>${value}</div>`);
            }
        }
        hapusKeluhan();
      });

      function hapusKeluhan(){
          $('.btn-keluhan').each(function(){
            $(this).on('click',function(){
                let value = $(this).data('value');
                if(keluhan.includes(value)){
                    keluhan = keluhan.filter(e => e != value);
                }
                $(this).hide();
            });
          });
      }

      $('.btn-periksa').on('click',() => {
        if(keluhan.length == 0){
            return;
        }
        $('.item').html(`
        <div class='container text-center m-5'>
            <span class="spinner-border text-dark" role="status" aria-hidden="true"></span>
            <h4>TUNGGU SEBENTAR</h4>
        </div>
        `);

        let result_keluhan = keluhan.toString();

        let datapost = [{
            name : 'keluhan',
            value : result_keluhan,
        }]

        $.ajax({
            type: "POST",
            url: "http://dihealth.dicampus.id/api.php?act=datapenyakitcek",
            data: datapost,
            success: function (response) {
                console.log(response);
                $('.item').html('');
                response = JSON.parse(response);

                let newdata = [];
                response.forEach(e => {
                    let cek = newdata.find(o => o.nama_penyakit == e.nama_penyakit);
                    if(!cek){
                        newdata.push(e);
                    }
                });
                
                newdata.forEach(e => {
                    $('.item').append(`
                    <div class="card animate__animated animate__fadeInUp mt-5">
                        <div class="card-body">
                        <div class="row">
                            <div class="media">
                            <img src="img/icon/sakit1.png" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">${e.nama_penyakit}</h5>
                                <p class='capitalize'><b>Keluhan :</b> ${e.gejala}</p>
                                ${e.isi}
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    `);
                });
            }
        });
      });

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