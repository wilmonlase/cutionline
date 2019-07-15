 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form method="post">  
        <h1 class="text-center">Pengajuan Cuti Tahunan</h1>
        <hr>
        <p>Yang mengajukan permohonan cuti tahunan dibawah ini:</p>
        <?php
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
          $jabatan = pg_query($koneksiPegawai, "SELECT jfu_id,jf_id,jabatan_nama FROM m_spg_jabatan WHERE jabatan_id = '$jabatanId'");
          while ($row = pg_fetch_assoc($jabatan)) {
            if($row['jfu_id'] != null){
              $jabatanJFUid = $row['jfu_id'];
              $jabatanGet = pg_query($koneksiPegawai, "SELECT jfu_nama FROM m_spg_referensi_jfu WHERE jfu_id = '$jabatanJFUid'");
              $row = pg_fetch_assoc($jabatanGet);
              $namaJabatan = $row['jfu_nama'];
            }
            elseif ($row['jf_id'] != null) {
              $jabatanJFid = $row['jf_id'];
              $jabatanGet = pg_query($koneksiPegawai, "SELECT jf_nama FROM m_spg_referensi_jf WHERE jf_id = '$jabatanJFid'");
              $row = pg_fetch_assoc($jabatanGet);
              $namaJabatan = $row['jf_nama'];
            }
            elseif ($row['jabatan_nama'] != null) {
              $namaJabatan = $row['jabatan_nama'];
            }
          }

          $unitKerja = pg_query($koneksiPegawai, "SELECT unit_kerja_nama FROM m_spg_unit_kerja WHERE unit_kerja_id = '$unitKerjaId'");
          while ($row = pg_fetch_assoc($unitKerja)) {
            $unitKerjaPegawai = $row['unit_kerja_nama'];
          }

        ?>
        <div class="form-group">
          <label><b>Nama</b></label>
          <input type="text" name="nama_pengguna" value="<?=$namaPegawai?>" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>NIP</b></label>
          <input type="text" name="nip" value="<?=$nip?>" required class="form-control" readonly>
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
            <option>Dalam Negeri</option>
            <option>Luar Negeri</option> 
          </select>
        </div>
        <div class="form-group">
          <label><b>Lama Cuti (hari kerja)</b></label>
          <input type="text" name="lama_cuti" required class="form-control" placeholder="Masukkan lama cuti berupa angka , mis : 3,4,5 dst.">
        </div>
        <div class="form-group">
          <label><b>Tujuan Cuti (Hanya diisi apabila memilih jenis cuti luar negeri. Isi dengan nama negara tujuan)</b></label>
          <input type="text" name="lama_cuti" required class="form-control" >
        </div>
        <div class="form-group">
          <label><b>Mulai Tanggal</b></label>
          <input type="date" class="form-control" name="mulai_tanggal" value="<?php echo date("Y-m-d") ?>" required> 
        </div>
        <div class="form-group">
          <label><b>s/d tanggal</b></label>
          <input type="date" class="form-control" name="s/d_tanggal" value="<?php echo date("Y-m-d") ?>" required> 
        </div>
        <div class="form-group">
          <label><b>Selama menjalankan cuti alamat saya adalah di :</b></label>
          <textarea rows="5" cols="78" type="text" name="alamat" required class="form-control" placeholder="Isi alamat anda menetap selama anda menjalankan cuti..."></textarea>
        </div>
        <div class="form-group">
          <label><b>Atasan Langsung</b></label>
          <input type="text" name="unit_kerja" required class="form-control">
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