
	<html >
	<head>
		<!-- #header -->
 			<?php 
 			include  "../aset/header.php";		
	 ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8 col-md-12">
							<h1>
								Silahkan Check dibawah	
							</h1>
							<p class="pt-10 pb-10 text-white">
								untuk melihat kondisi anda 
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
						
						<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
							<form class="form-wrap" action="proses-edit-kar.php" method="post">
								<h3 class="pb-20 text-center mb-30">Pertanyaan 5</h3>	
									<div class="section-top-border">
										<div class="row">
											
									<div class="">
									<ul class="unordered-list">
									<h3>Apakah anda mengalami salah satu dibawah ini?</h3>
									<br>
									<br>
										<h5>
											Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?
										</h5>
									</ul>
								</div>
						</div>
					</div>		
								
								<a href="jawaban2.php" class="genric-btn danger circle">YA</a>
								<a href="soal6.php" class="genric-btn info circle arrow">TIDAK<span class="lnr lnr-arrow-right"></span></a>
							</form>

						</div>
					</div>
				</div>	
			</section>
<?php 
			include "../aset/footer.php";
			 ?>	
		</body>
	</html>