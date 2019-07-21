 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form method="post" action="../config/simpanDataCuti.php">  
        <h1 class="text-center">Pengajuan Cuti Tahunan</h1>
        <hr>
        <p>Yang mengajukan permohonan cuti tahunan dibawah ini:</p>
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

          $jabatanTemp = pg_query($koneksiPegawai, "SELECT jabatan_id FROM m_spg_jabatan WHERE unit_kerja_id='$unitKerjaAtasan' and jabatan_jenis='2' ");
          while($row = pg_fetch_assoc($jabatanTemp)){
            $jabatan_id_atasan = $row['jabatan_id'];
          }

          $dataPegawaiAtasan = pg_query($koneksiPegawai, "SELECT peg_nama,peg_nip,jabatan_id FROM spg_pegawai WHERE jabatan_id = '$jabatan_id_atasan'");
          while ($row = pg_fetch_assoc($dataPegawaiAtasan)){
            $namaAtasan = $row['peg_nama'];
            $nipAtasan = $row['peg_nip'];
            $jabatanAtasanID = $row['jabatan_id'];
          }
          $jabatanAtasan = pg_query($koneksiPegawai, "SELECT jfu_id,jf_id,jabatan_nama FROM m_spg_jabatan WHERE jabatan_id = '$jabatanAtasanID'");
          while ($row = pg_fetch_assoc($jabatanAtasan)) {
            $namaJabatanAtasan = $row['jabatan_nama'];
          }
        ?>
        <div class="form-group">
          <label><b>Nama</b></label>
          <input type="text" name="nama_pengguna" value="<?=$namaPegawai?>" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>NIP</b></label>
          <input type="text" name="nip_pegawai" value="<?=$nip?>" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Pangkat/Golongan Ruang</b></label>
          <input type="text" name="gol_ruang" value="<?=$pangkatPegawai?> - <?=$namaPangakatPegawai?>" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Jabatan</b></label>
          <input type="text" name="jabatan" value="<?=$namaJabatan?>" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Unit Kerja</b></label>
          <input type="text" name="unit_kerja" value="<?=$unitKerjaPegawai?>" required class="form-control" readonly>
        </div>
        <p>Dengan ini mengajukan permohonan cuti tahunan dengan data sebagai berikut:</p>
        <div class="form-group">
          <label><b>Jenis Cuti</b></label>
          <select class="form-control" name="jenis_cuti" id="sel1">
            <option value="dalam_negeri">Dalam Negeri</option>
            <option value="luar_negeri">Luar Negeri</option> 
          </select>
        </div>
        <div class="form-group">
          <label><b>Lama Cuti (hari kerja)</b></label>
          <input type="text" name="lama_cuti" required class="form-control" placeholder="Masukkan lama cuti berupa angka , mis : 3,4,5 dst.">
        </div>
        <div class="form-group">
          <label><b>Tujuan Cuti (Hanya diisi apabila memilih jenis cuti luar negeri. Isi dengan nama negara tujuan)</b></label>
          <input type="text" name="negara_tujuan_cuti" class="form-control" >
        </div>
        <div class="form-group">
          <label><b>Mulai Tanggal</b></label>
          <input type="date" class="form-control" name="mulai_tanggal" value="<?php echo date("Y-m-d") ?>" required> 
        </div>
        <div class="form-group">
          <label><b>s/d tanggal</b></label>
          <input type="date" class="form-control" name="selesai_tanggal" value="<?php echo date("Y-m-d") ?>" required> 
        </div>
        <div class="form-group">
          <label><b>Selama menjalankan cuti alamat saya adalah di :</b></label>
          <textarea rows="5" cols="78" type="text" name="alamat" required class="form-control" placeholder="Isi alamat anda menetap selama anda menjalankan cuti..."></textarea>
        </div>
        
        <p>Data atasan langsung :</p>
        
        <div class="form-group">
          <label><b>Nama</b></label>
          <input type="text" name="nama_atasan" value="<?=$namaAtasan?>" required class="form-control">
        </div>
        <div class="form-group">
          <label><b>NIP</b></label>
          <input type="text" name="nip_atasan" value="<?=$nipAtasan?>" required class="form-control">
        </div>
        <div class="form-group">
          <label><b>Jabatan</b></label>
          <input type="text" name="jabatan_atasan" value="<?=$namaJabatanAtasan?>" required class="form-control">
        </div>

        <p>Demikian permohonan ini saya buat untuk dapat dipertimbangkan sebagaimana mestinya.</p>

        
        <hr>

        <!-- <button name="daftar" class="btn btn-block btn-primary" ><i class="fa fa-telegram"></i>Ajukan Permohonan</button> -->
        <button class="btn btn-primary pull-right" name="submit">Ajukan Permohonan <i class="glyphicon glyphicon-send"></i></button>  
        <a class="btn btn-default pull-left" href="index.php?halaman=halaman_utama">Kembali</a>
        <br>
      </form>
      
    </div>
  </div>
</div>