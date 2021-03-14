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

      <div class="container-fluid">
      <div class="container pt-4 pb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <h2 class='text-center mb-5'><a href='index' class="nav-link" style="color:#2E4D9B">RUMAH SEHAT</a></h2>
                <div class="card">
                <h4>DAFTAR</h4>
                    <form id="formDaftar">
                        <div class="form-group">
                            <label for="exampleInputNama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukan nama" maxlength="25">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Masukan email" maxlength="35">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputUser" aria-describedby="emailHelp" placeholder="Masukan username" maxlength="25">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-periksa btn-primary float-right klikdaftar">Daftar</button>
                        </div>
                        <a href="masuk" class="nav-link p-0">Sudah punya akun? Masuk Disini!</a>
                    </form>
                        <div class="modalAlert mt-2"></div>
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
