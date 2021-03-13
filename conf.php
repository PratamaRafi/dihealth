<?php
date_default_timezone_set('Asia/Jakarta');
function redate($date){
    $tahun = date('Y',strtotime($date));
    $bulan = date('n',strtotime($date));
    $tgl = date('d',strtotime($date));

    $tgl_indo = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

    echo $tgl . ' ' . $tgl_indo[$bulan] . ' ' . $tahun;
}

class Database {
    private $user = 'root';
    private $pass = '123';
    private $host = 'localhost';
    private $db = 'rumah_sehat';
    
    public function __construct(){
        $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
    }

    public function cekKeluhan($keluhan){

        $keluhan = explode(',',$keluhan);

        $i = 0;
        foreach($keluhan as $k){
            $sql = "SELECT * FROM tbl_penyakit WHERE gejala LIKE '%$k%' ORDER BY gejala ASC";
            $query = $this->con->query($sql);
        
            if($query->num_rows != 0){
                while($result = $query->fetch_array()){
                    $data[] = array(
                        'nama_penyakit' => $result['nama_penyakit'],
                        'gejala' => $result['gejala'],
                        'isi' => $result['isi'],
                    );
                }
            }
            $i++;
        }

        if(count($data) != 0){
            return $data;
        }else{
            return array();
        }
    }

    public function daftar_keluhan(){
        $sql = "SELECT * FROM tbl_daftar_keluhan ORDER BY nama_keluhan ASC";
        $query = $this->con->query($sql);
    
        if($query->num_rows == 0){
            return array();
        }else{
            while($result = $query->fetch_array()){
                $data[] = $result;
            }
            return $data;
        }
    }

    public function tambahKeluhan($keluhan){
        $sql = "INSERT INTO tbl_daftar_keluhan VALUES (0,'$keluhan')";
        $query = $this->con->query($sql);

        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

    public function hapusKeluhan($keluhan){
        $sql = "DELETE FROM tbl_daftar_keluhan WHERE id_keluhan = '$keluhan'";
        $query = $this->con->query($sql);

        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

    public function tambahpenyakit($penyakit,$keluhan,$isi){
        $sql = "INSERT INTO tbl_penyakit VALUES (0,'$penyakit','$isi','$keluhan')";
        $query = $this->con->query($sql);

        if($query){
            return "success";
        }else{
            return "failed";
        }
    }

    public function datapenyakit(){
        $sql = "SELECT * FROM tbl_penyakit ORDER BY nama_penyakit ASC";
        $query = $this->con->query($sql);
    
        if($query->num_rows == 0){
            return array();
        }else{
            while($result = $query->fetch_array()){
                $data[] = $result;
            }
            return $data;
        }
    }
    public function hapuspenyakit($keluhan){
        $sql = "DELETE FROM tbl_penyakit WHERE id_penyakit = '$keluhan'";
        $query = $this->con->query($sql);

        if($query){
            return "success";
        }else{
            return "failed";
        }
    }
}