$(function (){
 
$.berkay = {

invert:function(){
var deger =$("#txt").val().split( '' ).reverse().join( '' );   
$("#sonuc").val(deger);
},

/*Yukarıdaki alan Girilen Kelimeyi ters cevirir*/



enlarge:function(){

var deger = $("#txt").val().toUpperCase();
$("#sonuc").val(deger);
},

/*Yukarıdaki alan Girilen Kelimeyi Büyütür*/



small:function(){
var deger = $("#txt").val().toLowerCase();
$("#sonuc").val(deger);
},

/*Yukarıdaki alan Girilen Kelimeyi Kücültür*/



length:function(){

var deger = $("#txt").val();
var uzunluk = deger.length;
$("#sonuc").val(uzunluk);
},

/*Yukarıdaki alan Girilen Kelimenin uzunluğu bulunur*/


clear:function(){

$("#txt").val(" ");
$("#sonuc").val(" ");
},

/*Yukarıdaki alan Girilen Kelime alanını temizler*/



}

});
