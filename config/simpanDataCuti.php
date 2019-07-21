<?php

require_once "../config/koneksi.php";
$dateNow = date('Y/m/d');
// menyimpan data kedalam variabel
$nip_pegawai = $_POST['nip_pegawai'];
$cuti_di = $_POST['jenis_cuti'];
$lama_cuti = $_POST['lama_cuti'];
$negara_cuti = $_POST['negara_tujuan_cuti'];
$tanggal_mulai = $_POST['mulai_tanggal'];
$tanggal_selesai = $_POST['selesai_tanggal'];
$alamat_cuti = $_POST['alamat'];
$nip_atasan = $_POST['nip_atasan'];
$created_at = $dateNow;


// query SQL untuk insert data
$query="INSERT INTO dbcuti SET nip_pegawai='$nip_pegawai',status_cuti='1',jenis_cuti_id='1',cuti_di='$cuti_di',negara_cuti='$negara_cuti',lama_cuti='$lama_cuti',mulai_cuti_tanggal='$tanggal_mulai',selesai_cuti_tanggal='$tanggal_selesai',alamat_cuti='$alamat_cuti',nip_atasan='$nip_atasan',created_at='$created_at' ";
mysqli_query($koneksiDataCuti, $query);
// mengalihkan ke halaman index.php
header("location:../pegawai2/index.php");

?>