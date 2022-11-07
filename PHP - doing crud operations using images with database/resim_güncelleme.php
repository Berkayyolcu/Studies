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
	$sql=$db->prepare("SELECT * FROM image_upload WHERE resim_id=:id");
	$sql->execute(array(

		'id' => $_GET['resim_id']

	));

	$ayarcek=$sql->fetch(PDO::FETCH_ASSOC);

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
						<h2 class="text-center text-danger mt-3 mb-5">Resim Güncelle</h2>

						<!-- resim yükle -->
						<input type="file" name="file" 
						style="width:300px; margin:25px auto 0px auto; display: block;" required>

						<!-- secilen resmin resim idsini gönderir o resmin güncellenmesi sağlanır -->
						<input type="hidden" name="resim_id" value="<?php echo $ayarcek['resim_id'] ?>" >

						<!-- verileri buton ile gönderme -->
						<input type="submit" name="update"  class="btn btn-primary" 
						style="width:300px; margin:25px auto 0px auto; display: block;"  value="Güncelle"/>




					</form>


					<!-- gönderilen verilerin durumuna(basarılı-basarısız) göre cevap döner -->
					<div class="d-flex justify-content-start">

						<?php 
						if($_SESSION['durum']=="ok"){?>

							<div class="alert alert-success mt-5 w-100">
								<p>Güncelleme Başarılı</p>
							</div>

							<?php
							unset($_SESSION['durum']);
						} else if ($_SESSION['durum']=="no"){?>

							<div class="alert alert-danger mt-5 w-100">
								<p>Güncelleme Başarısız</p>
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


						<table class="table table-light w-75 table-striped mx-auto">

							<th>Resim Numarası</th>
							<th>Güncellenecek Resim</th>
							<tr>
								<!-- resim idsi veri tabanındaki veriyi ceker -->
								<td><p class="p"><?php echo $ayarcek['resim_id'] ?></p></td>

								<!-- gösterilecek resim -->
								<td><img style="width:150px; height:150px;" src="<?php echo  $ayarcek['image']  ?>"></td>

								<tr>

								</tr>

							</table>



						</div>

					</div>
				</div>
			</div>


		</body>
		</html>