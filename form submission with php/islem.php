<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Veriler</title>
    
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 

</head>
<body>


<div class="container text-center ">
   <div class="row ">
     <div class="col ">
       <div class="p-3 border mx-auto w-50 bg-light  p-5 mt-5 m-auto mb-5">


<?php
       
       $firstname = $_POST["firstname"]; // $_POST ile veriyi cekiyoruz ve değiskene aktarıyoruz
       $lastname = $_POST["lastname"];
       $email  = $_POST["email"];
       $yorum  = $_POST["yorum"];

       echo  "<b>Hosgeldiniz : </b>".$firstname;   // ekrana aktardığımız değiskenleri yazdırıyoruz
       echo  "  "  .$lastname; 
       echo  "<br>"."<b>E-posta adresiniz :</b> " .$email;
       echo  "<br>"."<b>Yorumunuz :</b> " .$yorum;

?>


        </div>    
       </div>
      </div>
     </div>      	

</body>
</html>