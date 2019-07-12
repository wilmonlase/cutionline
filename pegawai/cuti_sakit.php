 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <form method="post">  
        <h1 class="text-center">Pengajuan Cuti Sakit</h1>
        <hr>
        <p>Yang mengajukan permohonan cuti tahunan dibawah ini:</p>
        <div class="form-group">
          <label><b>Nama</b></label>
          <input type="text" name="nama_pengguna" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>NIP</b></label>
          <input type="text" name="nip" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Pangkat/Golongan Ruang</b></label>
          <input type="text" name="gol_ruang" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Jabatan</b></label>
          <input type="text" name="jabatan" required class="form-control" readonly>
        </div>
        <div class="form-group">
          <label><b>Unit Kerja</b></label>
          <input type="text" name="unit_kerja" required class="form-control" readonly>
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
          <label for="exampleFormControlTextarea1">Alamat Selama Cuti</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Unggah Lampiran</label>
          <input type="file" class="form-control" name="gambar">
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