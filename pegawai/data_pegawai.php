<h2>Data Pelangggan</h2>
<table class="table table-bordered" id="tabelku">
  <thead>
    <tr>
      <th>NIP</th>
      <th>Nama</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor=1; ?>
  <?php $ambil=$koneksi->pg_query("SELECT * FROM tbl_pegawai"); ?>
  <?php while($pecah=$ambil->pg_fetch_assoc()) { ?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah['nip'];?></td>
      <td><?php echo $pecah['nama'];?></td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>

