<?php
  require_once "../config/detailPegawai.php";  

  $dataCuti = mysqli_query($koneksiDataCuti, "SELECT * FROM dbcuti WHERE nip_pegawai='$nip' ");
  while ($row = mysqli_fetch_assoc($dataCuti)) {
        $id = $row['id'];
        $tujuanCuti = $row['cuti_di'];
        $lamaCuti = $row['lama_cuti'];
        $mulaiCuti = $row['mulai_cuti_tanggal'];
        $selesaiCuti = $row['selesai_cuti_tanggal'];
        $alamat = $row['alamat_cuti'];
  }
?>
<form method="post" class="hidden-print">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label>ID Pengajuan</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$id?>" name="id_pengajuan" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Jenis Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control"  name="jenis_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Nama</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$namaPegawai?>" name="nama" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Tujuan Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$tujuanCuti?>"  name="tujuan_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>NIP</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$nip?>" name="nip" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Lama Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$lamaCuti?>" name="lama_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Pangkat/Golongan</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$pangkatPegawai?> - <?=$namaPangakatPegawai?>" name="pangkat/golongan" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Tanggal Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$mulaiCuti?> s/d <?=$selesaiCuti?>" name="tanggal_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Jabatan</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$namaJabatan?>" name="jabatan" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Unit Kerja</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" value="<?=$unitKerjaPegawai?>" name="unit_kerja" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label data-toggle="tooltip" data-placement="top" title="Alamat Selama Cuti">Alamat Selama Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <textarea rows="5" cols="78" type="text" name="alamat" required class="form-control" readonly><?=$alamat?>
                </textarea>
            </div>
        </div>

    </div>
</form>

<p>Progress Pengajuan</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Progress</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Status ACC</th>
            <th>Alasan</th>
            <th>Tanggal Aksi</th>
            <th>Keterangan</th>  
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
    </tbody>
</table>
 
<a class="btn btn-default pull-left" href="index.php?halaman=riwayat_cuti_tahunan">Kembali</a>