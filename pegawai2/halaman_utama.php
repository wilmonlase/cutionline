<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.jarak { font-size:14px; line-height: 1.5em;}
		.text-center { font-size: 20px; }
		#tengah { text-align: center; }

	</style>
</head>

<h3>Selamat Datang!</h3>
<p>Selamat datang di SOMASI CUTI, Sistem Informasi Cuti bagi Aparatur Sipil Negara yang dikembangkan oleh Badan Kepegawaian Kabupaten Nias untuk memudahkan alur proses pengajuan dan verifikasi pelayanan kepegawaian. Untuk memulai, silahkan pilih salah satu dari menu di bawah ini.</p>
<hr>
<body>
	
	<div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div id="tengah">
					<h4><b>PILIHAN JENIS CUTI</b></h4> 
					</div> 
					<hr>

					<div class="row">
						<div class="col-lg-4 col-md-5">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-8 text-left">
											<div class="huge"></div>
											<div>Cuti Tahunan</div>
										</div>
										<div class="col-xs-3">
											<i class="fa fa-car fa-3x"></i>
										</div>
									</div>
								</div>
								<a type="button" class="btn btn-basic" data-toggle="modal" data-target="#myModal">
									Ajukan 
								</a>

								<!-- The Modal -->
								<div class="modal fade" id="myModal">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Cuti Tahunan</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<p class="text-center">Syarat-Syarat Pengajuan Cuti Tahunan</p>
												<ol class="jarak" type="1">
													<li>PNS dan calon PNS yang telah bekerja paling kurang 1 (satu) tahun secara terus menerus berhak atas cuti tahunan;</li>
													<li>Lamanya hak atas cuti tahunan adalah 12 (dua belas) hari kerja;</li>
													<li>Dalam hal hak atas cuti tahunan yang akan digunakan di tempat yang sulit perhubungannya, jangka waktu cuti tahunan tersebut dapat ditambah untuk paling lama 12 (dua belas) hari kalender;</li>
													<li>Hak atas cuti tahunan yang tidak digunakan dalam tahun yang bersangkutan, dapat digunakan dalam tahun berikutnya untuk paling lama 18 (delapan belas) hari kerja termasuk cuti tahunan dalam tahun berjalan;</li>
													<li>Hak atas cuti tahunan yang tidak digunakan 2 (dua) tahun atau lebih berturut-turut, dapat digunakan dalam tahun berikutnya untuk paling lama 24 (dua puluh empat) hari kerja termasuk hak atas cuti tahunan dalam tahun berjalan;</li>
													<li>Hak atas cuti tahunan dapat ditangguhkan penggunaannya oleh PPK atau pejabat yang menerima delegasi wewenang untuk memberikan hak atas cuti untuk paling lama 1 (satu) tahun, apabila kepentingan dinas mendesak;</li>
													<li>PNS yang menduduki Jabatan guru pada sekolah dan Jabatan dosen pada perguruan tinggi yang mendapat liburan menurut peraturan perundang-undangan, disamakan dengan PNS yang telah menggunakan hak cuti tahunan.</li>
												</ol>
											</ul> 
										</div>

										<!-- Modal footer -->
										<div class="modal-footer">


											<a class="btn btn-info pull-right" href="index.php?halaman=cuti_tahunan">Ajukan Permohonan <i class="glyphicon glyphicon-send"></i></a>
											<button  class="btn btn-basic pull-left" type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-8 text-left">
										<div class="huge"></div>
										<div>Cuti Besar</div>
									</div>
									<div class="col-xs-3">
										<i class="fa fa-plane fa-3x"></i>
									</div>
								</div>
							</div>
							<a href="index.php?halaman=cuti_besar">
								<div class="panel-footer">
									<span class="pull-left">Ajukan</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-8 text-left">
										<div class="huge"></div>
										<div>Cuti Sakit</div>
									</div>
									<div class="col-xs-3">
										<i class="fa fa-medkit fa-3x"></i>
									</div>
								</div>
							</div>
							<a href="index.php?halaman=cuti_sakit">
								<div class="panel-footer">
									<span class="pull-left">Ajukan</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-8 text-left">
										<div class="huge"></div>
										<div>Cuti Melahirkan</div>
									</div>
									<div class="col-xs-3">
										<i class="fa fa-female fa-3x"></i>
									</div>
								</div>
							</div>
							<a href="index.php?halaman=cuti_persalinan_anak">
								<div class="panel-footer">
									<span class="pull-left">Ajukan</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
									
									<div class="col-xs-8 text-left">
										<div class="huge"></div>
										<div>Cuti Alasan Penting</div>
									</div>
									<div class="col-xs-2">
										<i class="fa fa-warning fa-3x"></i>
									</div>
								</div>
							</div>
							<a href="index.php?halaman=cuti_alasan_penting">
								<div class="panel-footer">
									<span class="pull-left">Ajukan</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									
									<div class="col-xs-8 text-left">
										<div class="huge"></div>
										<div>Cuti Tugas Belajar</div>
									</div>
									<div class="col-xs-2">
										<i class="fa fa-book fa-3x"></i>
									</div>
								</div>
							</div>


							<a type="button" class="btn btn-basic" data-toggle="modal" data-target="#myModal">
								Ajukan 
							</a>

							<!-- The Modal -->
							<div class="modal fade" id="myModal">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Cuti Tugas Belajar</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<p class="text-center">Syarat-Syarat Pengajuan Cuti Tugas Belajar</p>
											<ol class="jarak" type="1">
												<li>PNS dan calon PNS yang telah bekerja paling kurang 1 (satu) tahun secara terus menerus berhak atas cuti tahunan;</li>
												<li>Lamanya hak atas cuti tahunan adalah 12 (dua belas) hari kerja;</li>
												<li>Dalam hal hak atas cuti tahunan yang akan digunakan di tempat yang sulit perhubungannya, jangka waktu cuti tahunan tersebut dapat ditambah untuk paling lama 12 (dua belas) hari kalender;</li>
												<li>Hak atas cuti tahunan yang tidak digunakan dalam tahun yang bersangkutan, dapat digunakan dalam tahun berikutnya untuk paling lama 18 (delapan belas) hari kerja termasuk cuti tahunan dalam tahun berjalan;</li>
												<li>Hak atas cuti tahunan yang tidak digunakan 2 (dua) tahun atau lebih berturut-turut, dapat digunakan dalam tahun berikutnya untuk paling lama 24 (dua puluh empat) hari kerja termasuk hak atas cuti tahunan dalam tahun berjalan;</li>
												<li>Hak atas cuti tahunan dapat ditangguhkan penggunaannya oleh PPK atau pejabat yang menerima delegasi wewenang untuk memberikan hak atas cuti untuk paling lama 1 (satu) tahun, apabila kepentingan dinas mendesak;</li>
												<li>PNS yang menduduki Jabatan guru pada sekolah dan Jabatan dosen pada perguruan tinggi yang mendapat liburan menurut peraturan perundang-undangan, disamakan dengan PNS yang telah menggunakan hak cuti tahunan.</li>
											</ol>
										</ul> 
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">


										<a class="btn btn-info pull-right" href="index.php?halaman=tugas_belajar">Ajukan Permohonan <i class="glyphicon glyphicon-send"></i></a>
										<button  class="btn btn-basic pull-left" type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
									</div>

								</div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	

</div>

</div>
</body>

</html>



