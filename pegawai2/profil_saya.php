 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form method="post" action="index.php">  
        <h1 class="text-center">Profil Anda</h1>
        <hr>
        <?php
          $jenisCuti = 1;
          $nip = $_SESSION["username"];
          require_once "../config/koneksi.php";
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
        <div class="form-group">
          <label><b>Nama</b></label>
          <input type="text" name="nama_pengguna" value="<?=$namaPegawai?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>NIP</b></label>
          <input type="text" name="nip" value="<?=$nip?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Pangkat/Golongan Ruang</b></label>
          <input type="text" name="gol_ruang" value="<?=$pangkatPegawai?> - <?=$namaPangakatPegawai?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Jabatan</b></label>
          <input type="text" name="jabatan" value="<?=$namaJabatan?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Unit Kerja</b></label>
          <input type="text" name="unit_kerja" value="<?=$unitKerjaPegawai?>" class="form-control" readonly>
        </div>
        <hr>

        <button name="daftar" class="btn btn-block btn-primary" >Kembali</button>
        <br>
      </form>

    </div>
  </div>
</div>