

<!DOCTYPE html>
	<html >
	<head>
		<!-- #header -->
 			<?php 
 			include  "../aset/header.php";	 ?>

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
							<a href="../check/soal1.php" class="genric-btn info circle arrow">Quick check<span class="lnr lnr-arrow-right"></span></a>
							
							
						</div>										
					</div>
				</div>					
			</section>
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
									<span>Anda harus login jika ingin karantina</span>
									
								</li>	
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
							<form class="form-wrap" action="tambah.php" method="post">
								<h3 class="pb-20 text-center mb-30">Pendaftaran</h3>	

								<input type="text" class="form-control" name="nama" placeholder="Nama pasien" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama pasien'" >


								<input type="number" class="form-control" name="nohp" placeholder="Nomor HP " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor HP'" >

								<input type="email" class="form-control" name="email" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" >
								<h5>Tanggal Lahir</h5>
								<input id="datepicker1" name="tgl_lahir" class="dates form-control"  placeholder="Tanggal Lahir" type="date">   

									<button type="submit" name="simpan" value="simpan" class="primary-btn text-uppercase">Confirm </button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End appointment Area -->

			<!-- Start facilities Area -->
			<section class="facilities-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">FASILITAS</h1>
		                        <p>Ini adalah falisitas yang didukung oleh website kami untuk mempermudah anda 
		                        dalam pengecekan/karantina sedari terjadi wabah covid-19 </p>
		                    </div>
		                </div>
		            </div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-rocket"></span>
								<h4>24/7 Emergency</h4>
								<p>
									Kami menyertakan contact rumah sakit di tulungagung agar anda dapat mudah menghubungi pihak rumahsakit terdekat jika terjadi kondisi darurat
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-heart"></span>
								<h4>Melayani sepenuh hati</h4>
								<p>
									Kami akan melayani anda terkait karantina dengan sepenuh hati dan selalu siap siaga pada kondisi apapun
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-bug"></span>
							    <h4>Blog tentang wabah</h4>
								<p>
									Kami juga menyediakan blog bagi anda yang menginginkan lebih tau tentang wabah ini
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-users"></span>
								<h4>Petugas yang Berpengalaman</h4>
								<p>
									Para tenaga medis online kita sangat berpengalaman dan akan tersedia pada jam buka 
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End facilities Area -->
			

			<!-- Start offered-service Area -->
			
			<!-- End offered-service Area -->
		
			<!-- Start team Area -->
		    <section class="team-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Dokter Online kita</h1>
		                        <p>Ini adalah profil tenaga medis online kami yang sangat berpengalaman dan anda bisa chech mereka juga di sosial media </p>
		                    </div>
		                </div>
		            </div>
		            <div class="row justify-content-center d-flex align-items-center">
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="../img/t1.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</div>			                        	
		                            <p>
		                            	ahmad rega samudra
		                            </p>
		                            <h4>ahmad</h4>		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="../img/t2.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</div>			                        	
		                            <p>
		                            	dwi pasha ambarawa
		                            </p>
		                            <h4>pasha</h4>		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="../img/t3.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</div>			                        	
		                            <p>
		                            	andra nur heriyanto
		                            </p>
		                            <h4>andra</h4>		                            
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6 single-team">
		                    <div class="thumb">
		                        <img class="img-fluid" src="../img/t4.jpg" alt="">
		                        <div class="align-items-end justify-content-center d-flex">
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</div>			                        	
		                            <p>
		                            	ridha thea salesa
		                            </p>
		                            <h4>ridha</h4>		                            
		                        </div>
		                    </div>
		                </div>		                		                		                
		            </div>
		        </div>
		    </section>
		    <!-- End team Area -->				
						
			<!-- Start feedback Area -->
			<section class="feedback-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-60 header-text text-center">
							<h1 class="mb-10 text-white">Feedback dari klien kita</h1>
							<p class="text-white">
							  yang sangat suka dengan fasilitas kita
							</p>
						</div>
					</div>			
					<div class="row feedback-contents justify-content-center align-items-center">
						<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="../img/play-btn.png" alt=""></a>
						</div>
						<div class="col-lg-6 feedback-right">
							<div class="active-review-carusel">
								<div class="single-feedback-carusel">
									
									<div class="title d-flex flex-row">
										<h4 class="text-white pb-10">Asawinka</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>								
										</div>										
									</div>
									<p class="text-white">
										sangat suka dengan fasilitas yang ada di sini walau pun masih ada yang kurang tetapi sudah sangat memadai untuk web sederhana tengtang covid 19 ini
									</p>
								</div>
								<div class="single-feedback-carusel">
									
									<div class="title d-flex flex-row">
										<h4 class="text-white pb-10">haritsuddin</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>								
										</div>										
									</div>
									<p class="text-white">
										sangat suka dengan fasilitas yang ada di sini walau pun masih ada yang kurang tetapi sudah sangat memadai untuk web sederhana tengtang covid 19 ini
									</p>
								</div>
								<div class="single-feedback-carusel">
								
									<div class="title d-flex flex-row">
										<h4 class="text-white pb-10">leon chino</h4>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked	"></span>								
										</div>										
									</div>
									<p class="text-white">
										sangat suka dengan fasilitas yang ada di sini walau pun masih ada yang kurang tetapi sudah sangat memadai untuk web sederhana tengtang covid 19 ini
									</p>
								</div>																
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End feedback Area -->	

		    <!-- Start brands Area -->
		   
		    <!-- End brands Area -->
	
			
			<!-- end recent-blog Area -->	

			<?php 
			include "../aset/footer.php";
			 ?>	
		</body>
	</html>