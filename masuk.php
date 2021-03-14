<?php 
require_once("./conf.php");
if(isset($_SESSION['login'])){
  header('location:index');
}
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
  <style>
    @media screen and (max-width:900px){
        .col-6{
            max-width: 100%;
            flex: 100%;
        }
        body::before{
            background-size:cover ;
        }
    }
  </style>
  <body>
       <!-- NAVBAR -->
      <!-- End NAVBAR -->

      <!-- Upper Content -->
      <!-- End Upper Content -->

      <!-- PAGE FAKTA & MITOS / VAKSIN -->

      <div class="container-fluid mt-3">
      <div class="container pt-5 pb-5">
        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-6">
                <h2 class='text-center mb-5'><a href='index' class="nav-link" style="color:#2E4D9B">RUMAH SEHAT</a></h2>
                <div class="card">
                <h4>MASUK</h4>
                    <form id="formMasuk">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-periksa btn-primary float-right klikmasuk">MASUK</button>
                        </div>
                        <a href="daftar" class="nav-link p-0"> Belum punya akun? Daftar sekarang!</a>
                        </form>
                        <div class="modalAlertMasuk mt-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
      </div>

      <div class="loading mt-5"></div>
      

      </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <?php require('footer.php'); ?>
