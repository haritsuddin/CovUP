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
									<th class="cell100 column5">Aksi</th>

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
								<tr class="row100 body">
							<td class="cell100 column1"><?= $p['nama'];?></td>
							<td class="cell100 column2"><?= $p['nohp'];?></td>
							<td class="cell100 column3"><?= $p['email'];?></td>
							<td class="cell100 column4"><?= $p['tgl_lahir'];?></td>
							<td class="cell100 column5">
      	
    						  <a href="edit-pasien.php?id_pasien=<?php echo $p['id_pasien']; ?>" class="badge badge-warning">edit</a>
    						  <a href="hapus-pasien.php?id_pasien=<?php echo $p['id_pasien']; ?>" class="badge badge-danger">hapus</a> 
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

				<td class="cell100 column1"><?= $b['nama'];?></td>
				<td class="cell100 column2"><?= $b['suhu'];?></td>
				<td class="cell100 column3"><?= $b['tgl_cek'];?></td>
				<td class="cell100 column4"><?= $b['nama_dokter'];?></td>
				<td class="cell100 column1"><?= $b['keadaan'];?></td>
				<td class="cell100 column5">
     
      <a href="edit-kar.php?id_karantina=<?php echo $b['id_karantina']; ?>" class="badge badge-warning">edit</a>
      <a href="hapus-kar.php?id_karantina=<?php echo $b['id_karantina']; ?>" class="badge badge-danger">hapus</a> 
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




			<!-- end recent-blog Area -->	

			<?php 
			include "../aset/footer.php";
			include "../aset/footer.php";
			 ?>	
		</body>
	</html>