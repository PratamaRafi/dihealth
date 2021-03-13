<?php 
require('conf.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Gejala</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Rumah Sehat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="input-gejala">Data Penyakit <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="input-keluhan">Data Keluhan</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
        </button>
        <div class="row">
            <div class="col-md-6">
            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Keluhan</th>
                    <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody id="tablebody">
                    
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Keluhan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <form id="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Keluhan</label>
            <input type="text" class="form-control" name="keluhan" id="namakeluhan" aria-describedby="emailHelp" placeholder="Enter here">
        </div>
    </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary save">Save</button>
    </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    loadData();

    function button(){
        $('.del').on('click',function(){
            $(this).html('loading');
            let id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "http://dihealth.dicampus.id/api.php?act=hapuskeluhan&&id=" + id,
                success: function (response) {
                    loadData();
                }
            });
        });
    }

    function loadData(){
        $.getJSON("http://dihealth.dicampus.id/api.php?act=datakeluhan",
            function (data, textStatus, jqXHR) {
                let i = 1;
                let template = '';
                data.forEach(e => {
                    template += `
                        <tr>
                        <th scope="row">${i}</th>
                        <td>${e.nama_keluhan}</td>
                        <td><a href='javascript:void(0)' data-id='${e.id_keluhan}' class='del'>Del</a></td>
                        </tr>
                    `;
                    $('#tablebody').html(template);
                i++;
                });
                button();
            }
        );
    }

    $('.save').on('click',function(){
        $(this).html('Wait');
        $(this).attr('disabled',true);

        let data = $('form').serializeArray();

        $.ajax({
            type: "POST",
            url: "http://dihealth.dicampus.id/api.php?act=tambahkeluhan",
            data: data,
            success: function (response) {
                $('.save').html('Save');
                $('.save').removeAttr('disabled');
                $('form')[0].reset();
                loadData();
            }
        });
    });
</script>
</body>
</html>