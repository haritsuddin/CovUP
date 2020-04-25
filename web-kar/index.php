	<?php 
include "loginkar.php";
?>

<!DOCTYPE html>
	<html >
	<head>
		<!-- #header -->
 			<?php 
 			include "../koneksi.php";
 			include  "../aset/header.php";
 			include "fungsikar.php";
 			include  "../aset/header-tabel.php";

$pasien 	= ambilPasien($kon);
$dokter 	= ambilDokter($kon);	 ?>

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
							<a href="tambah.php" class="genric-btn primary circle arrow">Laporan data karantina<span class="lnr lnr-arrow-right"></span></a>
							
						</div>										
					</div>
				</div>					
			</section></head>
			<!-- End banner Area -->

			

<?php  
		  $sql2 = "SELECT * FROM karantina INNER JOIN pasien ON karantina.id_pasien = pasien.id_pasien
								 INNER JOIN dokter ON karantina.id_dokter = dokter.id_dokter
							ORDER BY karantina.id_pasien";

$res2 = mysqli_query($kon,$sql2);

$baca2 = array();

while($data2 = mysqli_fetch_assoc($res2)){
	$baca2[] = $data2;
}		
?>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100"> 
				<h1>	Data karantina	</h1>
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">nama</th>
									<th class="cell100 column2">Suhu</th>
									<th class="cell100 column3">tanggal Cek</th>
									<th class="cell100 column4">nama dokter</th>
									<th class="cell100 column1">keadaan</th>
									<th class="cell100 column5">Aksi</th>

								</tr>
							</thead>
						</table>
					</div>

<?php 

    foreach($baca2 as $b){
     ?>
     	 <div class="table100-body js-pscroll">
						<table>
							<tbody>
							<tr class="row100 head">
								<td class="cell100 column1"><?= $b['nama'];?></td>
								<td class="cell100 column2"><?= $b['suhu'];?></td>
								<td class="cell100 column3"><?= $b['tgl_cek'];?></td>
								<td class="cell100 column4"><?= $b['nama_dokter'];?></td>
								<td class="cell100 column1"><?= $b['keadaan'];?></td>
								<td class="cell100 column5">
								    <a href="edit_kar.php?id_karantina=<?php echo $b['id_karantina']; ?>" class="badge badge-warning">edit</a>
      								<a href="hapus.php?id_karantina=<?php echo $b['id_karantina']; ?>" class="badge badge-danger">hapus</a> 
    							</td>
							</tr>

							</tbody>
						</table>
					</div>
						<?php 
} ?>

				</div>   
			</div>
		</div>	
	</div>	

			<!-- Start offered-service Area -->
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
						
			

		    <!-- Start brands Area -->
		   
		    <!-- End brands Area -->
	
			
			<!-- end recent-blog Area -->	

			<?php 
			include "../aset/footer.php";
			include "../aset/footer-tabel.php";
			 ?>	
		</body>
	</html>