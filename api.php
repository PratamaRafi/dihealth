<?php
require('conf.php');
header("Access-Control-Allow-Origin: *");

$db = new Database;

if(isset($_GET['act'])){
	$act = $_GET['act'];
}else{
	$act = 'api';
}

switch($act){
	case 'login' : {
		$data = $db->login($_POST['username'],$_POST['password']);
		echo $data;
		break;
	}
	case 'adduser' : {
		$data = $db->adduser($_POST['username'],$_POST['password'],$_POST['nama'],$_POST['email']);
		echo $data;
		break;
	}
	case 'hapuspenyakit' : {
		$keluhan = $_GET['id'];
		$data = $db->hapuspenyakit($keluhan);
		echo $data;
		break;
	}
	case 'datapenyakit' : {
		$data = $db->datapenyakit();
		echo json_encode($data);
		break;
	}
	case 'tambahpenyakit' : {
		$keluhan = $_POST['keluhan'];
		$penyakit = $_POST['penyakit'];
		$isi = $_POST['editor1'];
		$data = $db->tambahpenyakit($penyakit,$keluhan,$isi);
		echo $data;
		break;
	}
	case 'hapuskeluhan' : {
		$keluhan = $_GET['id'];
		$data = $db->hapusKeluhan($keluhan);
		echo $data;
		break;
	}
	case 'tambahkeluhan' : {
		$keluhan = $_POST['keluhan'];
		$data = $db->tambahKeluhan($keluhan);
		echo $data;
		break;
	}
	case 'datapenyakitcek' : {
		$keluhan = $_POST['keluhan'];
		$data = $db->cekKeluhan($keluhan);
		echo json_encode($data);
		break;
	}
	case 'datakeluhan' : {
		$data = $db->daftar_keluhan();
		echo json_encode($data);
		break;
	}
	case 'api' : {
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?name=indonesia",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: covid-19-data.p.rapidapi.com",
				"x-rapidapi-key: dd122ae595mshf801b9b013bb67bp1c5970jsnf5b51c984b7d"
			],
		]);
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}		
	break;
	}
}