	<?php 
include "loginpetugas.php";
?>
	<html >
	<head>
		<!-- #header -->
 			<?php 
 			include "../koneksi.php";
 			include  "../aset/header.php";
 			include "../web-kar/fungsikar.php";

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
			<?php  
$id_karantina = $_GET['id_karantina'];

$query = mysqli_query($kon, " SELECT * FROM karantina ");

$karantina = mysqli_fetch_assoc($query);
 ?>
			<!-- Start appointment Area -->
			<section class="appointment-area">			
				<div class="container">
					<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
						
						<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
							<form class="form-wrap" action="proses-edit-kar.php" method="post">
								<h3 class="pb-20 text-center mb-30">Edit Karantina</h3>	
								<input type="hidden" name="id_karantina" value="<?=$karantina["id_karantina"]?>">
								<input type="number" class="form-control" name="suhu" placeholder="<?=$karantina['suhu']?> " onfocus="this.placeholder = ''" onblur="this.placeholder = 'suhu'" >
								<input id="datepicker1" name="tgl_cek" class="dates form-control"  placeholder="<?=$karantina['tgl_cek']?>" type="date">

								<textarea name="keadaan" value="keadaan" class="" rows="5" placeholder="<?=$karantina['keadaan']?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea> 
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