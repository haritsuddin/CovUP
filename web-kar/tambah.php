	<?php 
include "loginkar.php";
?>
	<html >
	<head>
		<!-- #header -->
 			<?php 
 			include "../koneksi.php";
 			include  "../aset/header.php";
 			include "fungsikar.php";

$pasien 	= ambilPasien($kon);
$dokter 	= ambilDokter($kon);
 			
 			
	 ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8 col-md-12">
							<h1>
								kita peduli kesehatan
								anda dalam pandemi ini		
							</h1>
							<p class="pt-10 pb-10 text-white">
								Dalam pandemi ini stay at home adalah pilihan terbaik kita maka dari itu website ini akan membantu anda mengecek keadaan anda 
							</p>
							
						</div>										
					</div>
				</div>					
			</section></head>
			<!-- End banner Area -->

			<!-- Start appointment Area -->
			<section class="appointment-area">			
				<div class="container">
					<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
						<div class="col-lg-5 col-md-6 appointment-left">
							<h1>
								Jam Check up Karantina
							</h1>
							<ul class="time-list">
								<li class="d-flex justify-content-between">
									<span>Senin-Jumat</span>
									<span>08.00 am - 15.00 pm</span>
								</li>
								<li class="d-flex justify-content-between">
									<span>Sabtu</span>
									<span>08.00 am - 11.00 pm</span>
								</li>
								<li class="d-flex justify-content-between">
									<span>Minggu</span>
									<span>08.00 am - 09.00 pm</span>
								</li>																
							</ul>
						</div>


						<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
							<form class="form-wrap" action="tambahsuhu.php" method="post">
								<h3 class="pb-20 text-center mb-30">laporan Suhu</h3>	

								<div class="form-select" id="service-select">
									<select name="id_pasien">
										<option data-display="">Pasien</option>
										<?php  
										foreach ($pasien as $a) { ?>
										<option value="<?=$a['id_pasien']?>"><?=$a['nama']?></option>
										<?php }?>	
																	
									</select>
								</div>	



								<input type="number" class="form-control" name="suhu" placeholder="suhu " onfocus="this.placeholder = ''" onblur="this.placeholder = 'suhu'" >
								<h5>Tanggal Cek</h5>
								<input id="datepicker1" name="tgl_cek" class="dates form-control"  placeholder="Tanggal cek" type="date">

								<div class="form-select" id="service-select">
									<select name="id_dokter">
										<option data-display="">Dokter Online</option>
										<?php  
										foreach ($dokter as $d) { ?>
										<option value="<?=$d['id_dokter']?>"><?=$d['nama_dokter']?></option>
										<?php }?>
																					
									</select>
								</div>	

								<textarea name="keadaan" value="keadaan" class="" rows="5" placeholder="Keadaan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea> 
								<button type="submit" name="simpan" value="simpan" class="primary-btn text-uppercase">Confirm </button>
							</form>

						</div>
					</div>
				</div>	
			</section>
<?php 
			include "../aset/footer.php";
			include "../aset/footer-tabel.php";
			 ?>	
		</body>
	</html>