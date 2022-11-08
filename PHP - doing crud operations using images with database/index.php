<?php 
require_once 'db/conn.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image upload</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- style file -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


	<?php 
	$sql=$db->prepare("SELECT * FROM image_upload"); // image_upload tablomuzu çağrıyoruz
	$sql->execute(); // sorgumuzu çalıştırıyor

    //echo "<pre>";
    //print_r($ayarcek);
    //echo "</pre>";

	?>


	<div class="container text-center ">
		<div class="row ">
			<div class="col" style="margin:150px auto 0px auto; display: block;">

				<div class="p-3 border mx-auto bg-light w-75 p-5 mt-5 m-auto mb-5" >


					<form action="db/process.php" enctype="multipart/form-data" method="POST">


						<!-- baslık -->
						<h2 class="text-center text-danger mt-3 mb-5">Resim Yükleme Alanı</h2>

						<!-- resim yükle -->
						<input type="file" name="file" 
						style="width:300px; margin:25px auto 0px auto; display: block;" required>

						<!-- verileri buton ile gönderme -->
						<input type="submit" name="upload"  class="btn btn-primary " 
						style="width:300px; margin:25px auto 0px auto; display: block;"  value="Yükle"/>


					</form>


					<!-- gönderilen verilerin durumuna(basarılı-basarısız) göre cevap döner -->
					<div class="d-flex justify-content-start">

						<?php 
						//unset($_SESSION['durum']);
						if($_SESSION['durum']=="ok"){?>

							<div class="alert alert-success mt-5 w-100">
								<p>Ekleme Başarılı</p>
							</div>

							<?php
							unset($_SESSION['durum']);
						} else if ($_SESSION['durum']=="no"){?>

							<div class="alert alert-danger mt-5 w-100">
								<p>Ekleme Başarısız</p>
							</div>

							<?php unset($_SESSION['durum']);}
							?>

						</div>

						<!-- gönderilen verilerin durumuna(basarılı-basarısız) göre cevap döner -->
						<div class="d-flex justify-content-start">

							<?php 
						//unset($_SESSION['durum']);
							if($_SESSION['durumm']=="ok"){?>

								<div class="alert alert-success mt-5 w-100">
									<p>Silme Başarılı</p>
								</div>

								<?php
								unset($_SESSION['durumm']);
							} else if ($_SESSION['durum']=="no"){?>

								<div class="alert alert-danger mt-5 w-100">
									<p>Silme Başarısız</p>
								</div>

								<?php unset($_SESSION['durum']);}
								?>

							</div>





						</div>    


					</div>
				</div>
			</div>




			<div class="container text-center ">
				<div class="row ">
					<div class="col" style="margin:150px auto 0px auto; display: block;">

						<div class="p-3 border mx-auto bg-light w-75 p-5 mt-5 m-auto mb-5" >

							<?php

							$say=0;
						//veri tabanımızdaki veri kadar döngü ile döndürür
						//sayı değiskenimiz ve say++ ile değerimi bir artdır deriz
							while($ayarcek=$sql->fetch(PDO::FETCH_ASSOC)){ $say++?>  

								<table class="table table-light w-75 table-striped mx-auto">

									<th>Resim Numarası</th>
									<th>Resim</th>
									<tr>
										<!-- resim idsi veri tabanındaki veriyi ceker -->
										<td><p class="p"><?php echo $ayarcek['resim_id'] ?></p></td>

										<!-- gösterilecek resim -->
										<td><img style="width:150px; height:150px;" src="<?php echo  $ayarcek['image']  ?>"></td>

										<tr>
											<td colspan="2">

												<!-- resmi güncelleyecek buton -->
												<a href="resim_güncelleme.php?resim_id=<?php echo $ayarcek['resim_id']; ?>&update=ok">
													<input type="submit" name="update" class="btn btn-success b" value="Güncelle"/>
												</a>

												<!-- resmi silecek buton -->
												<a href="db/process.php?resim_id=<?php echo $ayarcek['resim_id']; ?>&delete=ok">
													<input type="submit" class="btn btn-danger b" value="Sil"/>
												</a>

											</td>
										</tr>



									</table>

									<?php
								}
								?>

							</div>

						</div>
					</div>
				</div>





			</body>
			</html>