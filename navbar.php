<!-- NAVBAR -->
<div class="container my-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent animate__animated animate__fadeInDown">
    <a class="navbar-brand" href="index">
        <img src="img/1.png" alt="logo" style="width: 45px; height: 45px;">
        <span>Rumah Sehat</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-image: url('https://mdbootstrap.com/img/svg/hamburger3.svg?color=2E4D9B');"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link slide-scroll" href="index">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link slide-scroll" href="periksa">Periksa Kesehatan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link slide-scroll" href="https://instagram.com/rumah_sehat.official/">Hubungi Kami</a>
        </li>
        <li class="nav-item">
        <?php if(isset($_SESSION['login'])){?>
            <a class="nav-link btn-primary contact-button" href="keluar">Keluar</a>
        <?php }else{?>
            <a href="javascript:void(0)" class="nav-link btn-primary contact-button" data-toggle="modal" data-target="#exampleModalLong">
                Masuk
            </a>
        <?php }?>
        </li>
        </ul>
    </div>
    </nav>
</div>
      <!-- End NAVBAR -->

<!-- Modal Login-->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MASUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="formMasuk">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        </form>
        <div class="modalAlertMasuk"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Daftar" data-dismiss="modal">Daftar Sekarang</button>
        <button type="button" class="btn btn-primary klikmasuk">Masuk</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Daftar-->
<div class="modal fade" id="Daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DAFTAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
        <div class="modalAlert"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLong" data-dismiss="modal">Masuk Disini</button>
        <button type="button" class="btn btn-primary klikdaftar">Daftar</button>
      </div>
    </div>
  </div>
</div>