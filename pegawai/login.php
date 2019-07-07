<?php
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<style type="text/css">
  #tengah{
    text-align: center;
  }
</style>
<body>
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h1><b>SISTEM INFORMASI PENGAJUAN CUTI KEPEGAWAIAN</b></h1> 
        <h2> BKD Kab. NIAS</h2> 
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
          <div id="tengah">
            <strong>   Input Data User Anda </strong> 
            </div> 
          </div>
          <div class="panel-body">
            <form role="form" method="post">
             <br />
             <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
              <input type="text" class="form-control" name="user" placeholder="Masukkan NIP Anda" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
              <input type="password" class="form-control"  name="pass" placeholder="Password" />
            </div>
          
            <button class="btn btn-block btn-primary" name="masuk">Masuk</button>
          </form>

          <?php
          if (isset($_POST['masuk']))
          {
            $pas = hash($_POST['pass']);
             // $pas = $_POST['pass'];

            $result = pg_query($koneksi2, "SELECT * FROM master_user WHERE user_id='$_POST[user]' AND user_password='$pas'");

              echo $result, $pas;

              $yangcocok = $result->num_rows;

              if ($yangcocok==1)
              {
                $akun = $result->pg_fetch_assoc();
                if ($akun['hak_akses']=="Admin")
                {
                  $_SESSION['admin']=$akun;
                  echo "<div class='alert alert-info'>Login Sukses</div>";
                  echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                }
              }
              else
               {
                echo "<div class='alert alert-danger'>Login Gagal</div>";
                // echo "<meta http-equiv='refresh' content='1;url=login.php'>";
               } 
          }
          ?>
        </div>

      </div>
    </div>


  </div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>
