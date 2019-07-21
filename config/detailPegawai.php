<?php
$nip = $_SESSION["username"];
require_once "koneksi.php";
$dataPegawais = pg_query($koneksiPegawai, "SELECT * FROM spg_pegawai WHERE peg_nip = '$nip'");
while ($row = pg_fetch_assoc($dataPegawais)) {
  $namaPegawai = $row['peg_nama'];
  $pangkatGolRuangId = $row['gol_id_akhir'];
  $jabatanId = $row['jabatan_id'];
  $unitKerjaId = $row['unit_kerja_id'];
}
$pangkatGolRuang = pg_query($koneksiPegawai, "SELECT nm_gol, nm_pkt FROM m_spg_golongan WHERE gol_id = '$pangkatGolRuangId'");
while ($row = pg_fetch_assoc($pangkatGolRuang)) {
  $pangkatPegawai = $row['nm_gol'];
  $namaPangakatPegawai = $row['nm_pkt'];
}
$struktural=false;
$pelaksana=false;
$fungsional=false;
$jabatan = pg_query($koneksiPegawai, "SELECT jfu_id,jf_id,jabatan_nama FROM m_spg_jabatan WHERE jabatan_id = '$jabatanId'");
while ($row = pg_fetch_assoc($jabatan)) {
  if($row['jfu_id'] != null){
    $jabatanJFUid = $row['jfu_id'];
    $jabatanGet = pg_query($koneksiPegawai, "SELECT jfu_nama FROM m_spg_referensi_jfu WHERE jfu_id = '$jabatanJFUid'");
    $row = pg_fetch_assoc($jabatanGet);
    $namaJabatan = $row['jfu_nama'];
    $pelaksana = true;
  }
  elseif ($row['jf_id'] != null) {
    $jabatanJFid = $row['jf_id'];
    $jabatanGet = pg_query($koneksiPegawai, "SELECT jf_nama FROM m_spg_referensi_jf WHERE jf_id = '$jabatanJFid'");
    $row = pg_fetch_assoc($jabatanGet);
    $namaJabatan = $row['jf_nama'];
    $fungsional = true;
  }
  elseif ($row['jabatan_nama'] != null) {
    $namaJabatan = $row['jabatan_nama'];
    $struktural = true;
  }
}

$unitKerja = pg_query($koneksiPegawai, "SELECT unit_kerja_id,unit_kerja_nama,unit_kerja_parent FROM m_spg_unit_kerja WHERE unit_kerja_id = '$unitKerjaId'");
while ($row = pg_fetch_assoc($unitKerja)) {
  $unitKerjaPegawai = $row['unit_kerja_nama'];
  if($pelaksana == true || $fungsional == true){
    $unitKerjaAtasan = $row['unit_kerja_id'];
  }
  elseif($struktural == true){
    $unitKerjaAtasan = $row['unit_kerja_parent'];
  }
}
?>