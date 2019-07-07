<?php
session_start();
// //$koneksi = new mysqli("localhost","root","","nomor_batch");


 
// // $conn_string = "host=localhost port=5432 dbname=dbcuti user=postgres password=qwert";
//$koneksi = pg_connect("host=localhost port=5432 dbname=dbcuti user=postgres password=qwerty");

$koneksi1 = pg_connect("host=203.130.207.181 port=5432 dbname=simpeg user=postgres password=org2018!2018");
$koneksi2 = pg_connect("host=203.130.207.181 port=5432 dbname=erk user=postgres password=org2018!2018");
$koneksi3 = pg_connect("host=localhost port=5432 dbname=dbcuti user=postgres password=qwerty");


// $koneksi = new PDO('pgsql:host=localhost;dbname=dbcuti', 'postgres', 'qwerty');

// if(!$koneksi)
// {
// 	echo "Tidak Konek";
// }
// else
// {
// 	echo "conect";
// }

 
// if($koneksi2){
//     echo "koneksi sukses";
// }
// else{
//     echo "koneksi gagal";
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