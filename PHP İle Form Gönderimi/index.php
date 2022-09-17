<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP İle Form Gönderimi</title>

	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>


    <div class="container text-center ">
     <div class="row ">
       <div class="col ">
         <div class="p-3 border mx-auto bg-light w-50 p-5 mt-5 m-auto mb-5">

           <form action="islem.php" method="POST">

            <h2 class="text-center text-danger mt-3 mb-5">Form Olusturma</h2>

            <!-- Girilecek Bilgiler Begind -->
            <input type="text" class="form-control m-auto mb-2 " name="firstname" style="width:350px"  placeholder="Username" autocomplete="off">
            <input type="text" class="form-control m-auto mb-2 " name="lastname"  style="width:350px" placeholder="Lastname" autocomplete="off">
            <input type="email"class="form-control m-auto mb-2 " name="email" style="width:350px" placeholder="Email" autocomplete="off">
            <textarea class="form-control m-auto mb-2" class="form-control" style="width:350px" name="yorum" placeholder="Yorumunuz" autocomplete="off"></textarea>
            <!-- Girilecek Bilgiler Finish -->

            <!-- Girilecek Bilgileri Buton İle Gönderme Begind -->
            <input type="submit" name="register"  class="btn btn-primary " style="width:300px; margin:25px auto 0px auto; display: block;"  value="Gönder"/>
            <!-- Girilecek Bilgileri Buton ile Gönderme Finish -->

        </form>

    </div>    
</div>
</div>
</div>


</body>
</html>