 <?php
 session_start();
 require_once 'conn.php';


// Resim Yükleme 

 if (isset($_POST['upload'])) {


if ($_POST['file'] ==null) {
  
echo "bos gecilemez";

}
  $uploads_dir = '../images';
  @$tmp_name = $_FILES['file']["tmp_name"];
  @$name = $_FILES['file']["name"];
	   //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);	
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $resimyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


  $image_save=$db->prepare("INSERT INTO image_upload SET
    image=:image
    ");
  $insert=$image_save->execute(array(
    'image'=>$resimyol,	
  ));

  if ($insert) {
    $_SESSION['durum']="ok";
    Header("Location:../index.php");

  } else {
    $_SESSION['durum']="no";
    Header("Location:../index.php");
  }

}




// resim güncelleme
if(isset($_POST['update'])){

  $resim_id=$_POST['resim_id'];

  $uploads_dir = '../images';
  @$tmp_name = $_FILES['file']["tmp_name"];
  @$name = $_FILES['file']["name"];
     //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);  
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $resimyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

  $image_update=$db->prepare("UPDATE image_upload SET
    image=:image
    WHERE resim_id={$_POST['resim_id']}");

  $update=$image_update->execute(
    [
      'image'=>$resimyol,
    ]
);

  if ($update) {
    $_SESSION['durum']="ok";
    Header("Location:../resim_güncelleme.php");

  } else {
    $_SESSION['durum']="no";
    Header("Location:../resim_güncelleme.php");
  }
}





// resmi silme

if ($_GET['delete']=="ok") {

  $delete=$db->prepare("DELETE from image_upload where resim_id=:id");
  $kontrol=$delete->execute(array(
    'id' => $_GET['resim_id']
  ));

  if ($kontrol) {

    $_SESSION['durumm']="ok";
    Header("Location:../index.php");
  } else {
    $_SESSION['durumm']="no";
    Header("Location:../index.php");
  }
}




?>
