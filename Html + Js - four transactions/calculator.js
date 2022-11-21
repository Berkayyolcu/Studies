var n1;
var n2;

function toplama(){
	n1=document.getElementById("s1").value;
	n2=document.getElementById("s2").value;
	n1=parseInt(n1);                             
	n2=parseInt(n2);
	total=n1+n2;
	document.getElementById("sonuc").value=total;	 
}

function cıkarma(){
n1=document.getElementById("s1").value;
n2=document.getElementById("s2").value;	
n1=parseInt(n1);
n2=parseInt(n2);
total=n1-n2;
document.getElementById("sonuc").value=total;	
}

function carpma() {
n1=document.getElementById("s1").value;
n2=document.getElementById("s2").value;
n1=parseInt(n1);
n2=parseInt(n2);
total=n1*n2;
document.getElementById("sonuc").value=total;	
}

function bölme (){
n1=document.getElementById("s1").value;	
n2=document.getElementById("s2").value;	
n1=parseInt(n1);
n2=parseInt(n2);
total=n1/n2;
document.getElementById("sonuc").value=total;
}

function temizle (){
document.getElementById("sonuc").value="";
document.getElementById("s1").value="";
document.getElementById("s2").value="";
}