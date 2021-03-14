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
      $.getJSON("<?= $baseurl; ?>api.php",
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

      $('.klikdaftar').on('click',function(){
        $('.modalAlert').html('');
        $('.klikdaftar').attr('disabled',true);
        $('.klikdaftar').html('loading');
        let data = $('#formDaftar').serializeArray();

        for(let d of data){
          if(d.value == ""){
            $('.modalAlert').html(`
              <div class='alert alert-danger'>Data masih kosong</div>
              `);
            $('.klikdaftar').removeAttr('disabled');
            $('.klikdaftar').html('Daftar');
            return;
          }
        }

        $.ajax({
          type: "POST",
          url: "<?= $baseurl; ?>api.php?act=adduser",
          data: data,
          success: function (res) {
            $('#formDaftar')[0].reset();
            $('.klikdaftar').removeAttr('disabled');
            $('.klikdaftar').html('Daftar');
            if(res === "success"){
              $('.modalAlert').html(`
              <div class='alert alert-success'>Berhasil mendaftar, silakan masuk</div>
              `);
            }else{
              $('.modalAlert').html(`
              <div class='alert alert-danger'>Username sudah terdaftar</div>
              `);
            }
          }
        });
      });


      
      $('.klikmasuk').on('click',function(){
        $('.modalAlertMasuk').html('');
        $('.klikmasuk').attr('disabled',true);
        $('.klikmasuk').html('loading');
        let data = $('#formMasuk').serializeArray();

        $.ajax({
          type: "POST",
          url: "<?= $baseurl; ?>api.php?act=login",
          data: data,
          success: function (res) {
            $('.klikmasuk').removeAttr('disabled');
            $('.klikmasuk').html('Masuk');
            if(res === "success"){
              $('.modalAlertMasuk').html(`
              <div class='alert alert-success'>Berhasil mendaftar, tunggu sebentar</div>
              `);
              window.location = 'index';
            }else{
              $('.modalAlertMasuk').html(`
              <div class='alert alert-danger'>Username atau password salah</div>
              `);
            }
          }
        });
      });
    </script>
  </body>
</html>