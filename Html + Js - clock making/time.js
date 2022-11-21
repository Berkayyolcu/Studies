   

   function dijitalSaat() {
        var dt = new Date();
        var saat = dt.getHours();       //saat verisini olusturur. 
        var dakika = dt.getMinutes();  //dakika verisini olusturur.
        var saniye = dt.getSeconds(); //saniye verisini olusturur. 
 
        dakika = Tik(dakika);
        saniye = Tik(saniye);
 
        document.getElementById('dt').innerHTML = saat + ":" + dakika;
        document.getElementById('dt_saniye').innerHTML = saniye;
 
        var time
        time = setInterval('dijitalSaat()', 1000); // her 1 saniyede bir yenileme yapılıyor.
        var date = dt.toLocaleDateString();
    }

    function Tik(tikDegeri) {
        if (tikDegeri < 10) {
            tikDegeri = "0" + tikDegeri;
        }
        return tikDegeri;
    }






