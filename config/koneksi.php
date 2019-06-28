<?php
session_start();
// //$koneksi = new mysqli("localhost","root","","nomor_batch");


 
// // $conn_string = "host=localhost port=5432 dbname=dbcuti user=postgres password=qwert";
$koneksi = pg_connect("host=localhost port=5432 dbname=dbcuti user=postgres password=qwerty");


// $koneksi = new PDO('pgsql:host=localhost;dbname=dbcuti', 'postgres', 'qwerty');

// if(!$koneksi)
// {
// 	echo "Tidak Konek";
// }
// else
// {
// 	echo "conect";
// }

 
if($koneksi){
    echo "koneksi sukses";
}
else{
    echo "koneksi gagal";
}

function redirect($url)
{
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}


$result = pg_query($koneksi, "SELECT nama FROM tbl_pegawai");
while ($pecah = pg_fetch_assoc($result)){
	 echo $pecah['nama'];
}
		
			
			

?>