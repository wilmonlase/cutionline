<?php
// session_start();
// //$koneksi = new mysqli("localhost","root","","nomor_batch");


 
// // $conn_string = "host=localhost port=5432 dbname=dbcuti user=postgres password=qwert";
//$koneksi = pg_connect("host=localhost port=5432 dbname=dbcuti user=postgres password=qwerty");

// $koneksi1 = pg_connect("host=203.130.207.181 port=5432 dbname=simpeg user=postgres password=org2018!2018");
// $koneksi2 = pg_connect("host=203.130.207.181 port=5432 dbname=erk user=postgres password=org2018!2018");
$koneksiPegawai = pg_connect("host=localhost port=5432 dbname=simpeg user=postgres password=qwerty");
$koneksiUser = pg_connect("host=localhost port=5432 dbname=erk user=postgres password=qwerty");
// $koneksi3 = pg_connect("host=localhost port=5432 dbname=dbcuti user=postgres password=qwerty");
$koneksiDataCuti = new mysqli("localhost","root","","somasi_cuti");


// $koneksi = new PDO('pgsql:host=localhost;dbname=dbcuti', 'postgres', 'qwerty');

// if(!$koneksiPegawai)
// {
// 	echo "Tidak Konek Pegawai";
// }
// else
// {
// 	echo "conect Pegawai";
// }

 
// if($koneksiUser){
//     echo "koneksi sukses User";
// }
// else{
//     echo "koneksi gagal user";
// }

// if(!$koneksiDataCuti){
// 	echo "Gagal Data somasi_cuti";
// }
// else{
// 	echo "berhasil DB cuti";
// }

// function redirect($url)
// {
//     ob_start();
//     header('Location: '.$url);
//     ob_end_flush();
//     die();
// }


// $result = pg_query($koneksi2, "SELECT user_id FROM master_user");
// while ($pecah = pg_fetch_assoc($result)){
// 	 echo $pecah['user_id'];
// }
		
			
			

?>