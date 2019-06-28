 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form method="post">  
        <h1 class="text-center">Pengajuan Cuti Sakit</h1>
        <hr>
        <p>Yang mengajukan permohonan cuti tahunan dibawah ini:</p>
        <div class="form-group">
          <label><b>Nama</b></label>
          <input type="text" name="nama_pengguna" required class="form-control" placeholder="masukkan nama pengguna">
        </div>
        <div class="form-group">
          <label><b>NIP</b></label>
          <input type="text" name="nip" required class="form-control" placeholder="masukkan nama nip">
        </div>
        <div class="form-group">
          <label><b>Pangkat/Golongan Ruang</b></label>
          <input type="text" name="gol_ruang" required class="form-control" placeholder="masukkan gol_ruang">
        </div>
        <div class="form-group">
          <label><b>Jabatan</b></label>
          <input type="text" name="jabatan" required class="form-control" placeholder="masukkan jabatan">
        </div>
        <div class="form-group">
          <label><b>Unit Kerja</b></label>
          <input type="text" name="unit_kerja" required class="form-control" placeholder="masukkan unit kerja">
        </div>
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
        <p>Demikian permohonan ini saya buat untuk dapat dipertimbangkan sebagaimana mestinya.</p>


        <hr>

        <button name="daftar" class="btn btn-block btn-primary" ><i class="fa fa-telegram"></i>Ajukan Permohonan</button>
        <br>
      </form>

      <?php
      if (isset($_POST["daftar"]))
      {
        $nama_pengguna = $_POST["nama_pengguna"];
        $nama_lengkap = $_POST["nama_lengkap"];
        $email = $_POST["email"];
        $nomor_hp = $_POST["nomor_hp"];
        $kata_sandi = $_POST["kata_sandi"];
        $alamat = $_POST["alamat"];
        $kelurahan = $_POST["kelurahan"];
        $kecamatan = $_POST["kecamatan"];
        $tanya = $_POST["tanya"];
        $jawab = $_POST["jawab"];

        $ambil=$koneksi->query("SELECT * FROM tbl_pelanggan WHERE email='$email'");
        $yangcocok = $ambil->num_rows;
        if ($yangcocok==1)
        {
          echo "<script>alert('Pendaftaran gagal, email sudah digunakan');</script>";
          echo "<script>location='daftar.php';</script>";
        }
        else
        {
          $koneksi->query("INSERT INTO tbl_pelanggan
            (id_pengguna,nama_lengkap,email,nomor_hp,kata_sandi,alamat,kelurahan,kecamatan,pertanyaan,jawaban)
            VALUES ('$nama_pengguna','$nama_lengkap','$email','$nomor_hp','$kata_sandi','$alamat','$kelurahan','$kecamatan','$tanya','$jawab')");

          echo "<script>alert('Pendaftaran sukses, silahkan login');</script>";
          echo "<script>location='masuk.php';</script>";
        }

      }
      ?>
    </div>
  </div>
</div>