<?php
//mysql baglanti kodunu ekliyoruz
include("connection.php");
include("functions.php");

//sorguyu hazirliyoruz
$sql = "DELETE FROM users WHERE id=".$_GET['id'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($con,$sql);
       
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($con);
}

//veritabani baglantisini kapatiyoruz.
session_start();
session_destroy();
header('location:index.php');

mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Örneği</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<!-- taşıyıcı başlangıcı -->
<div class="container">
  <h1><a href="#">Online Bağış</a><div></div></h1>
  
   	
  <div><button onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>
  <div><button onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign Up</button></div>
  
<!-- navbar başlangıcı --> 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Ana Sayfa</a></li>
      <li><a href="#">Bağışlarım</a></li>
      <li><a href="#">Hakkımızda</a></li>
      <li><a href="#">İletişim</a></li>
	 
    </ul>
  </div>
</nav>
<!-- navbar bitişi --> 
  
<!-- jumbotron başlangıcı -->
    <div id = "jumbo" class="jumbotron">
    
    <h1>İşimiz, işiniz.</h1>      
    <p> Siz değerli müşterilerimize hizmet vermekten mutluluk 
duyar.</p>
<a href = "logout.php">cık</a>
  </div>
<!-- jumbotron bitişi -->
 
 
<!-- menü ve içerik yanyana durması için satır oluştur -->
<div class="row">
<!-- 4 hücre genişliğinde sol menü -->
  <div class="col-sm-4">
 
<!-- nav ile sol menü başlangıcı-->
<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="#">Neden Halil Pazarlama?</a></li>
  <li><a href="#">Müşteri Görüşleri</a></li>
  <li><a href="#">Referanslar</a></li>
  <li><a href="#">Bize Ulaşın</a></li>
</ul>
<!-- nav ile sol menü bitişi-->
 
<!-- 4 hücre genişliğinde sol menü bitişi -->  
</div>
 
<!-- 8 hücre genişliğinde ana içerik -->
<div class="col-sm-8">
 
<!-- panel başlangıcı -->
<div class="panel panel-default">
  <div class="panel-heading">Neden Halil Pazarlama?</div>
  <div class="panel-body">
  <p align="justify">Pazarlama firmaların, hangi malların veya hizmetlerin müşterilerinin ilgisini çekeceğini tayin etmeleri ve satışlar, iletişim ve işletme idaresi geliştirmeleri için stratejileri belirlemeleri sürecidir. Pazarlama süreci, bir bütünleştirilmiş süreç olup bunun vasıtasıyla firmalar müşterileri için değer yaratmakta ve bunun karşılığında müşterilerden deger kapabilmek için güçlü müşteri ilişkileri kurmaktadırlar.</p>
  </div>
</div>
<!-- panel bitişi --> 
<!-- 8 hücre genişliğinde ana içerik bitişi-->
</div>
<!-- menü ve içerik yanyana durması için satır bitişi -->
</div>
 
<!-- alt bölüm başlangıcı -->
<div class="well well-sm">
<p align="center">Halil Pazarlama A.Ş. 
<br> Her Hakkı Saklıdır. Copyright &copy 2017</p>
</div>
<!-- alt bölüm bitişi -->
 
<!-- taşıyıcı bitişi -->
</div>
 
</body>

<style>
#anybutton {
       top:2%;
       left:90%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
#anybutton2 {
       top:2%;
       left:80%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       
	  }
	   
	   
	    #anybutton3 {
       top:2%;
       left:70%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   #anybutton4 {   
       top:2%;
       left:60%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   
 </style>
 
 <script>
	function clickMe(){
	 document.location.href = "login.php";
	
}

function clickMe2(){
	 document.location.href = "signup.php";
	
}



 </script>
 </html>
