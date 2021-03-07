<?php
date_default_timezone_set('Asia/Jakarta');
function redate($date){
    $tahun = date('Y',strtotime($date));
    $bulan = date('n',strtotime($date));
    $tgl = date('d',strtotime($date));

    $tgl_indo = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

    echo $tgl . ' ' . $tgl_indo[$bulan] . ' ' . $tahun;
}