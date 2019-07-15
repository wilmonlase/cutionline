<form method="post" class="hidden-print">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label>ID Pengajuan</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="id_pengajuan" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Jenis Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="jenis_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Nama</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="nama" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Tujuan Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="tujuan_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>NIP</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="nip" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Lama Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="lama_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Pangkat/Golongan</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="pangkat/golongan" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Tanggal Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="tanggal_cuti" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Jabatan</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="jabatan" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Unit Kerja</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="unit_kerja" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label data-toggle="tooltip" data-placement="top" title="Alamat Selama Cuti">Alamat Selama Cuti</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <textarea rows="5" cols="78" type="text" name="alamat" required class="form-control" readonly>
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
        </tr>
    </tbody>
</table>

<p>Beri Aksi</p>

<div class="form-group">
    <label>Aksi</label>
    <select class="form-control" name="aksi">
        <option value="diterima">Di-acc / Diterima</option>
        <option value="ditolak">Ditolak</option>
    </select>
</div>

<p>Ini alasan pertimbangan Anda didalam menolak/menyetujui pengajuan cuti ybs ...</p>

<div class="form-group">
    <textarea rows="5" cols="37" class="form-control" name="alasan" required="required"></textarea>
</div>

<button class="btn btn-primary pull-right" name="submit"> Simpan Aksi Tindakan <i class="glyphicon glyphicon-send"></i></button>  
<a class="btn btn-default pull-left" href="index.php?halaman=acc_cuti_tahunan">Kembali</a>