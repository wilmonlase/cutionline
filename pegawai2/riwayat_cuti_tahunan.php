
<h2>Pengajuan Cuti Tahunan</h2>
<hr>
<?php
  require_once "../config/detailPegawai.php";  

  $dataCuti = mysqli_query($koneksiDataCuti, "SELECT * FROM dbcuti WHERE nip_pegawai='$nip' ");
?>
<table class="table table-bordered" id="tabelku">
    <thead>
      <tr>
        <th>No</th>
        <th>Tgl. Pengajuan</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Status Pengajuan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $number = 1;
      while ($row = mysqli_fetch_assoc($dataCuti)) {
        ?>
        <tr>
        <td><?php echo $number; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td><?php echo $namaPegawai; ?></td>
        <td><?php echo $nip; ?></td>
        <td><?php echo $row['status_cuti']; ?></td>
        <td>
          <a href="index.php?halaman=lihat_cuti_tahunan" class="glyphicon glyphicon-eye-open"></a>
        </td>
      </tr>
      <?php
      $number += 1;
      }
      
      ?>
    </tbody>
  </table>