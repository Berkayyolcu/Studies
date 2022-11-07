<?php

try {

     $db = new PDO("mysql:host=localhost;dbname=resim_yukleme", "root", "BerkayYolcu0619");
     
     //echo "Bağlantı Başarılı";
     
    } catch (PDOException $e){

     echo "Bir Hata Oluştu : " .$e->getMessage();
    
    }


?>