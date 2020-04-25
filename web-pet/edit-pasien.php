<?php 
include "loginpetugas.php";
?>

<!DOCTYPE html>
	<html >
	<head>
		<!-- #header -->
 			<?php 
 			include "../koneksi.php";
 			include  "../aset/header.php";	 
 			include  "../aset/header-tabel.php";
 			?>

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
			</section>

<?php  

$id_pasien = $_GET['id_pasien'];
$queryp = mysqli_query($kon, " SELECT * FROM pasien INNER JOIN level on pasien.id_level=level.id_level where id_pasien ='$id_pasien'");

$pasien = mysqli_fetch_assoc($queryp);
?>


<section class="appointment-area">			
				<div class="container">
				<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
							<form class="form-wrap" action="proses-edit-pasien.php" method="post">
								<h3 class="pb-20 text-center mb-30">Edit data</h3>	
								<input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien'];?>">

								<input type="text" class="form-control" name="nama" value="<?= $pasien['nama'];?>"  
								placeholder="<?= $pasien['nama'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama pasien'" >


								<input type="text" class="form-control" name="nohp" value="<?= $pasien['nohp'];?>"  
								placeholder="<?= $pasien['nohp'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor HP'" >

								<input type="email" class="form-control" name="email" value="<?= $pasien['email'];?>"  
								placeholder="<?= $pasien['email'];?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" >

								<input id="datepicker1" name="tgl_lahir" class="dates form-control"  placeholder="Tanggal Lahir" type="date">   

									<button type="submit" name="simpan" value="simpan" class="primary-btn text-uppercase">Confirm </button>
							</form>
						</div>
					</div>
				</div>	
			</section>

			<!-- start banner Area -->
			<?php 
			

			$sql = "SELECT * FROM pasien ORDER BY nama";

			$res = mysqli_query($kon,$sql);

			$baca = array();

			while($data = mysqli_fetch_assoc($res)){
			$baca[] = $data;
}		
?>
			<!-- php -->
		
 <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100"> 
<h1>	Data Pasien		</h1>
			<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">nama</th>
									<th class="cell100 column2">No Telp</th>
									<th class="cell100 column3">Email</th>
									<th class="cell100 column4">tgl_lahir</th>
									

								</tr>
							</thead>
						</table>
					</div>
 <?php 

    foreach($baca as $p){
     ?>
 <div class="table100-body js-pscroll">
						<table>
							<tbody>

				<td class="cell100 column1"><?= $p['nama'];?></td>
				<td class="cell100 column2"><?= $p['nohp'];?></td>
				<td class="cell100 column3"><?= $p['email'];?></td>
				<td class="cell100 column4"><?= $p['tgl_lahir'];?></td>
				
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
	



 	<!-- data ke 2 -->	

		  
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

				<td class="cell100 column1"><?= $b['nama'];?></td>
				<td class="cell100 column2"><?= $b['suhu'];?></td>
				<td class="cell100 column3"><?= $b['tgl_cek'];?></td>
				<td class="cell100 column4"><?= $b['nama_dokter'];?></td>
				<td class="cell100 column1"><?= $b['keadaan'];?></td>
				
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




			<!-- end recent-blog Area -->	

			<?php 
			include "../aset/footer.php";
			include "../aset/footer.php";
			 ?>	
		</body>
	</html>