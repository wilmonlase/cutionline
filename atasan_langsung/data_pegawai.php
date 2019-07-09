<?php
$idp = $_GET["id"];

$result = pg_query($koneksi2, "SELECT user_id FROM master_user");
while ($pecah = pg_fetch_assoc($result)){
  echo $pecah['user_id'];

$result = pg_query($koneksi1, "SELECT peg_nama FROM simpeg_pegawai WHEN peg_nip='196604151987121001'");
$detail = $ambil->fetch_assoc();
?>
<h2>Profil Anda</h2>
<form method="post" enctype="multipart/form-data">
<div class="col-md-4">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $detail['peg_nama'] ?>" readonly ></div>
  <div class="form-group">
    <label>NIP</label>
    <input type="text" class="form-control" name="nip" value="<?php echo $detail['peg_nip'] ?>">  
  </div>
  <div class="form-group">
    <label>Pangkat/Golongan Ruang</label>
    <input type="text" class="form-control" name="nip" value="<?php echo $detail['jabatan'] ?>">  
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" class="form-control" name="nip" value="<?php echo $detail['gol_id_akhir'] ?>">   
  </div>
  <button class="btn btn-primary" name="save">Simpan</button>
</div>
<div class="form-group">
    <label>Unit Kerja</label>
    <input type="text" class="form-control" name="nip" value="<?php echo $detail['unit_kerja_id'] ?>">  
</div>
</form>

