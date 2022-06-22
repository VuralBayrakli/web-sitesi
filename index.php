<?php
include('connection.php');
include("functions.php");

session_start();

if(isset($_SESSION['user_id'])) {
	echo "<style>";
	echo " #anybutton{ visibility : hidden;} ";
	echo " #anybutton2{ visibility : hidden;} ";
	echo " #anybutton4{ visibility : visible; left:90%; position: absolute;} ";
	echo " #anybutton3{ visibility : visible; left:80%; position: absolute;} ";
	echo "</style>";
	
}
else{
	echo "<style>";
	echo " #anybutton{ visibility : visible;} ";
	echo " #anybutton4{ visibility : hidden;} ";
	echo " #anybutton3{ visibility : hidden;} ";
	echo " #anybutton2{ visibility : visible;} ";
	echo "</style>";
	
}


$aa = $_SESSION['id'];
//sorguyu hazirliyoruz

$sql = "SELECT * FROM users where id ='$aa'";
$cevap = mysqli_query($con,$sql);
$gelen=mysqli_fetch_array($cevap);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Örneği</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:100,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/font-awesome.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<!-- taşıyıcı başlangıcı -->
<div class="container">
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="https://www.yenicedernegi.com/wp-content/uploads/2019/04/yard%C4%B1m-icon.png" width="65" height="65" class="d-inline-block align-top" alt="">   
  </a>
  <br>
  <h3 class="navbar-text"><a href = "index.php">Online Bağış</a></h3>
  </nav>
  
  <br>	
  <div><button onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>
  <div><button onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign Up</button></div>
  <div><button id = "anybutton3" type="button" class="btn btn-primary" ><?php echo $_SESSION['user_name'];?></button></div>
  <div><button  onclick = "clickMe3()" id = "anybutton4" type="button" class="btn btn-primary" >Log out</button></div>
  
<!-- navbar başlangıcı --> 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li style="font-family: 'Josefin Sans', sans-serif;" class="active"><a href="index.php">Ana Sayfa</a></li>
      <li><a href="bagislarim.php">Bağışlarım</a></li>
	  <li><a href="hakkimizda.php">Hakkımızda</a></li>
	 
    </ul>
  </div>
</nav>
<!-- navbar bitişi --> 
  
<!-- jumbotron başlangıcı -->
    <div id = "jumbo" class="jumbotron">
    
    <h1>Zekat verin, bereket bulun.</h1>      
    <p> Müslüman kardeşinin ihtiyacını giderenin Allah da ihtiyacını giderir.</p>
	<button onclick = "clickMe4()" id = "anybutton5" class="btn btn-primary" >Bağış Yap</button>
  </div>
<!-- jumbotron bitişi -->
 

<!-- menü ve içerik yanyana durması için satır oluştur -->
  <div class="row">
    <div class="col-lg-12 vertab-container">
      <div class="col-lg-3 col-md-3 col-sm-3  vertab-menu">
        <div class="list-group">
			<a href="#" class="list-group-item text-left"> Kurban </a>
			<a href="#" class="list-group-item text-left"> Zekat </a>
			<a href="#" class="list-group-item text-left"> Eğitim </a>
			<a href="#" class="list-group-item text-left"> Yetim </a>
			<a href="#" class="list-group-item text-left"> Cami ve Mescit </a>
			<a href="#" class="list-group-item text-left"> Afet </a>
			<a href="#" class="list-group-item text-left"> Hafız </a>
			<a href="#" class="list-group-item text-left"> Su Kuyusu </a>
			<a href="#" class="list-group-item text-left"> Ramazan </a>
			
		</div>
      </div>
      <div id="accordion" class="col-lg-9 col-md-9 col-sm-9 col-xs-12 vertab-accordion panel-group"> 
        <div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
				KURBAN
			  </h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
			  <div class="panel-body">
			  Kurbanlarınızı güvence ile kesip istediğiniz türde yardıma muhtaç
			  ailelere ulaştırıyoruz. Başlıca kurban bağışı türleri: 
			  <ul>
			  <li>YURTDIŞI VACİP KURBAN BÜYÜKBAŞ HİSSE</li>
			  <li>YURTİÇİ VACİP KURBAN BÜYÜKBAŞ HİSSE </li>
			  <li>YURTİÇİ AKİKA KURBAN </li>
			  <li>YURTİÇİ ADAK KURBAN </li>
			  <li>YURTİÇİ ŞÜKÜR KURBAN </li>
			  <li>YURTİÇİ NAFİLE KURBAN </li>
			  <li>YURTDIŞI ADAK KURBAN </li>
			  <li>YURTDIŞI AKİKA KURBAN </li>
			  <li>YURTDIŞI ŞÜKÜR KURBAN </li>
			  <li>YURTDIŞI NAFİLE KURBAN </li>
			  </ul>
			  </div>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
			  <h4 class="panel-title">
				ZEKAT
			  </h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
			  <div class="panel-body">Dini vecibe olan zekat bağışlarınızı kabul ediyor, dinen zekatın verilebileceği kardeşlerimize, ihtiyacına göre ulaştırıyoruz.
			  Dinimizde çok önemli yeri olan zekat ile ilgili hadisler:
			  <ul>
			  <li>Zekât kişinin Müslümanlığının bir delilidir. </li>
			  <li>Kim nefsinin cimriliğinden korunursa, işte onlar kurtuluşa erenlerdir. </li>
			  <li>Sadaka ve zekât vermek, maldan hiçbir şey eksiltmez </li>
			  <li>Namazı dosdoğru kılın, zekatı verin ve rüku edenlerle birlikte siz de rüku edin. </li>
			  <li>Sizin dostunuz (veliniz), ancak Allah, O'nun elçisi, rüku ediciler olarak namaz kılan ve zekatı veren müminlerdir. </li>
			  <li>Eğer onlar tevbe edip namazı kılarlarsa ve zekatı verirlerse, artık onlar sizin dinde kardeşlerinizdir. Bilen bir topluluk için ayetleri böyle birer birer açıklarız. </li>
			  
			  </ul>	

			  </div>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3">
				EĞİTİM
			  </h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
			  <div class="panel-body">
			  İmam Hatip Lisesi Burs Programı:
			  Ülkemiz ile Müslüman ülke ve topluluklara İmam Hatip Lisesi eğitimi vermek amacıyla yürüttüğümüz bir projedir.
			  <br>
			  İlahiyat Burs Programı:
			  Ülkemiz ile Müslüman ülke ve topluluklara lisans ve lisansüstü eğitimi vermek amacıyla yürüttüğümüz bir projedir.
			  <br>
			  Bilim ve Teknik Burs Programı:
			  Türkiye Cumhuriyeti vatandaşı öğrencilere, dini bilgilerle donanmaları amacıyla uygulanan burs programıdır.
			  <br>
			  Eğitim Yardımı:
			  Manevi değerlerimizi benimsemiş, alanında uzman nesiller yetiştirmek istiyor, sizi de destek vermeye davet ediyoruz.
			  
			  </div>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
				YETİM
			  </h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
			  <div class="panel-body">
			  İnsani yardım ve İslami eğitim çalışmalarına Türkiye’de ve dünyada 30 farklı mazlum coğrafyada devam eden Vuslat Derneği yetimlerin yüzündeki tebessüm, gönüllerindeki dua olmaya devam ediyor. Derneğimizin insani yardım çalışmaları kapsamında her geçen gün daha çok yetimin yüzünde bir tebessüm oluşturabilmek için canla başla çalışmayı sürdürüyoruz.<br>
			  <br>
			  Yetim Himayesi Yurt Dışı:Yetimlerimize yalnız olmadıklarını hissettirmek için siz de bu iyilik seferberliğimize destek olabilirsiniz.
			  <br>		  
			  Yetim Himayesi Yurt İçi:
              Yetim desteği yurt içinde yetim kalmış çocuklara yönelik olarak yapılan aylık nakdi destek programıdır.
			  <br>
			  Yurt Dışı Yetim Eğitim Desteği:
			  6-18 yaş arası yetim öğrencilere verilecek eğitim desteği bu programa yapılan bağışlardan karşılanacaktır.
			  <br>
			  Yurt Dışı Yetim Eğitim ve Barınma Desteği:
			  6-18 yaş arası yetim öğrencilere verilecek yatılı eğitim desteği bu programa yapılan bağışlardan karşılanacaktır.
			  <br>
			  Yetim Genel Bağış:
			  Yüce dinimiz İslam, yetime sahip çıkmayı, onları koruyup gözetmeyi, onlara adaletle davranmayı emreder.
			  <br>
			  Yetim Etkinlik ve Sosyal Destek:
			  Yurt içinde ve yurt dışında, yetimler ve ailelerine yönelik destek projeleri için kullanılacak bağışlardır.
			  <br>
			  Yetimhane İnşa ve Destek Projeleri:
Yurt dışında bulunan yetimhanelerin inşaat, iyileştirme ve işletme giderleri yapacağınız bağışlarla karşılanmaktadır.
			  
			  
			  </div>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse5">
				CAMİ VR MESCİT
			  </h4>
			</div>
			<div id="collapse5" class="panel-collapse collapse">
			  <div class="panel-body">
			  Camilere Yardım:
Mescitlerin Allah'ın evi olduğunu biliyor, desteklerinizle cami ve mescitler onarıyor, inşa ediyoruz.<br>
Mescit:
Vakfımız dünyanın dört bir yanında mescitler inşa ederek toplumların dini hayatını desteklemektedir.
			  </div>
			</div>
        </div>
		
		<div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse6">
				AFET
			  </h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
			  <div class="panel-body">Yangın:
Orman yangınlarında zarar gören ailelerimizin yaralarını sarıyor, bağışlarınızı kardeşlerimize ulaştırıyoruz.
<br>
Sel:
Yağışların sele dönüşmesi sonucu mağdur olan vatandaşlarımızın yaralarını bağışlarınızla sarıyoruz.<br>
Deprem:
Siz değerli bağışçılarımızın yardımlarını deprem bölgelerine ulaştırarak yaşanan acıları hafifletmeye çalışıyoruz.

 </div>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse7">
			  <h4 class="panel-title">
				HAFIZ
			  </h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
			  <div class="panel-body">
			  Çocuklarımızın eğitim seviyesinin yükseltilmesi, faziletli ve erdemli bir toplumun oluşturulması, dini ihtiyaçlarının giderilmesi, nitelikli ve bilgili bir neslin yetiştirilmesi ve kimliğimizin muhafazası için insanları hafızlık kurumuna teşvik eden çalışmalar gerçekleştiriyoruz.
Müslümanlar olarak, diğergâmlık duygularımızı hep canlı tutmak ve neslimizi bilinçli bir şekilde geleceğe hazırlamak durumundayız. Bunun yanı sıra Müslümanların Ehl-i Sünnet çizgisinde varlığını devam ettirebilmesi için insanımızın, imanını ve İslam ahlakını koruması çok önemlidir. Bu yolda gösterilecek çabanın da ne denli büyük olduğu şüphesizdir. Başlıca hafız bağış türlerimiz:</div>
			  <ul><li>HAFIZ YETİŞTİRİYORUM</li>
			  <li>HAFIZ (GENEL BAĞIŞ)</li>
			  <li>HAFIZ GİYİM</li>
			  <li>HAFİZE YETİŞTİRİYORUZ</li>
			  <li>HAFİZE GİYİM</li></ul>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse8">
				SU KUYUSU
			  </h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
			  <div class="panel-body">
					Afrika ve Asya’da hayırseverlerin bağışları ile açtığı binlerce su kuyusu ile kuraklıkla mücadele eden coğrafyalara umut oluyor.  Su yaşamın temeli, en hayati ihtiyaçlarımızdan bir tanesidir bizler için. Yaşadığımız coğrafya ve imkanlarımız bakımından, dünyada bu temel ihtiyaca en kolay ulaşabilen şanslı milletlerden biriyiz.
			  <br>Su Kuyusu Kardeşliği ile bir kuyuyu tek başına açmaya imkanı olmayan bağışçılarımızın desteklerini ortak bir havuzda toplayarak Asya ve Afrika’da su kuyuları açıyoruz.
			  <br>Su kuyusu bağışı türleri:
			  <ul>
			  <li>ASYA SU KUYUSU </li>
			  <li>AFRİKA SU KUYUSU </li>
			  <li>ASYA ŞADIRVAN </li>
			  <li>SUDAN 15 TEMMUZ ŞEHİTLERİ SU KUYUSU </li>
			  
			  </ul>
			  </div>
			</div>
        </div>
        <div class="vertab-content">
			<div class="panel-heading">
			  <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse9">
				RAMAZAN
			  </h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
			  <div class="panel-body">Fidye
Tutulamayan oruca mukabil verilen fidyelerinizi kabul ediyor (Asgari 40 TL'dir) ihtiyaç sahibi ailelere dağıtıyoruz.<br>
Alışveriş Yardım Kartı
Bağışlarınızla alınan alışveriş yardım kartları yurt içindeki ihtiyaç sahibi ailelerimize dağıtılmaktadır.<br>
Gıda Paketi
Bağışlarınızla içerisinde temel gıda maddeleri malzemelerinin yer aldığı gıda kolilerini ihtiyaç sahiplerine ulaştırıyoruz.<br>
Yemin Kefareti
Yemin kefaretinizi Türkiye Diyanet Vakfı bünyesinde bulunan aşevleriyle ihtiyaç sahibi kardeşlerimize ulaştırabilirsiniz. </div>
			</div>
        </div>
		
      </div>
    </div>
  </div>
<!-- alt bölüm başlangıcı -->
<br><br>
<div class="social-btn">
        <a href="https://facebook.com/" target="_blank"><div class="social face"><i class="fa fa-facebook fa-2x"></i><span>Facebook</span></div></a>
        <a href="https://twitter.com/" target="_blank"><div class="social twi"><i class="fa fa-twitter fa-2x"></i><span>Twitter</span></div></a>
        <a href="https://www.linkedin.com/in/vuralbayrakl%C4%B1" target="_blank"><div class="social in"><i class="fa fa-linkedin  fa-2x"></i><span>LinkedIn</span></div></a>
        <a href="https://pinterest.com/" target="_blank"><div class="social pin"><i class="fa fa-pinterest-p fa-2x"></i><span>Pinterest</span></div></a>
        <a href="https://github.com/VuralBayrakli" ><div class="social git"><i class="fa fa-github fa-2x"></i><span>Github</span></div></a>
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
       
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   #anybutton4 {   
       top:2%;
       
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   
	@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

.panel-title {
	cursor:pointer;
}
h4.tab-title
{
	font-family: "avenirheavy", Helvetica, Arial, "sans-serif";
	font-weight: normal;
	font-size: 22px;
	color: #ffffff;
}
.vertab-content ul, .vertab-content ol {
	padding-left: 15px;
}
@media (min-width:768px) {
.vertab-container {
	z-index: 10;
	background-color: #7952b3;
	padding: 0 !important;
	border: 1px solid #ddd;
	margin-top: 20px;
	background-clip: padding-box;
	opacity: 0.97;
	filter: alpha(opacity=97);
	overflow: auto;
	margin-bottom: 50px;
}
.vertab-menu {
	padding-right: 0;
	padding-left: 0;
	padding-bottom: 0;
	display: block;
	background-color: #CACACA;
}
.vertab-menu .list-group {
	margin-bottom: 0;
}
.vertab-menu .list-group>a {
	margin-bottom: 0;
	border-radius: 0;
}
.vertab-menu .list-group>a, .vertab-menu .list-group>a {
	color: #818181;
	background-image: none;
	background-color: #F6F6F6;
	border-radius: 0;
	box-sizing: border-box;
	border: none;
	border-bottom: 1px solid #CACACA;
	padding: 15px 10px;
}
.vertab-menu .list-group>a.active, .vertab-menu .list-group>a:hover, .vertab-menu .list-group>a:focus {
	position: relative;
	border: none;
	border-radius: 0;
	border-bottom: 1px solid #CACACA;
	border-left: 5px solid #050505;
	padding-left: 5px;
	background-image: none;
	background-color: #F6F6F6;
	color: #0f0e0e;
}
.vertab-content {
	padding-left: 20px;
	padding-top: 10px;
	color: #FFFFFF;
}
.vertab-accordion .vertab-content:not(.active) {
	display: none;
}
.vertab-accordion .vertab-content.active .collapse {
	display: block;
}	
.vertab-container .panel-heading {
	display: none;
}
.vertab-container .panel-body {
	border-top: none !important;
}
}

/* If the tc_breakpoint variable is changed, this breakpoint should be changed as well */
@media (max-width:767px) {
.vertab-container {
	margin-top: 20px;
	margin-bottom: 20px;
}
.vertab-container .vertab-menu {
	display: none;
}
.vertab-container .panel-heading {
	background-color: #F6F6F6;
	color: #818181;
	padding: 15px;
	border-bottom: 1px solid #F6F6F6;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	border-left: 5px solid #F6F6F6;
}
.vertab-container .panel-heading:hover, .vertab-container .panel-heading:focus, .vertab-container .panel-heading.active {
	border-left: 5px solid #7952b3;
	border-bottom: 1px solid #7952b3;
}
.vertab-content {
	border-bottom: 1px solid #121111;
}
.vertab-container .panel-title a:focus, .vertab-container .panel-title a:hover, .vertab-container .panel-title a:active {
	color: #818181;
	text-decoration: none;
}
.panel-collapse.collapse, .panel-collapse.collapsing {
	background-color: #7952b3 !important;
	color: #ffffff;
}
.vertab-container .panel-collapse .panel-body {
	border-top: none !important;
}
}


div.social-btn {
    display: block;
    width: 665px;
    margin: 0 auto;
    text-align: center;
}
div.social-btn a {
    text-decoration: none;
}
div.social-btn div {
    width: 130px;
    display: inline-block;
    float: left;
    height: 120px;
    line-height: 120px;
    color: #fff;
    margin-right: 3px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    font-size: 20px;
    text-shadow:0px 0px 5px #000;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    margin-bottom: 50px;
}
div.social-btn a:last-child div {
    margin-right: 0;
}
div.social-btn div:hover, div.social-btn div:active {
    height: 135px;
    padding-top: 15px;
}
i {
    -moz-transition: all 0.4s ease-out;
    -webkit-transition: all 0.4s ease-out;
    -o-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out;
}
div.face span, div.twi span, div.in span, div.pin span, div.git span{
    position: absolute;
    left: 0;
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
    width: 100px;
    padding: 0px 15px;
    opacity: 0;
    -moz-transition: all 0.6s ease-in;
    -o-transition: all 0.6s ease-in;
    -webkit-transition: all 0.6s ease-in;
    transition: all 0.6s ease-in;
    line-height: 110px;
    font-size: 20px;
}
div.social-btn div:hover i  {
    opacity: 0;
}
div.social-btn div:hover span {
    opacity: 1;
}
div.face {
    background: #3A5795;
    -moz-box-shadow: 0px 4px 0px #1e469d;
    -webkit-box-shadow: 0px 4px 0px #1e469d;
    box-shadow: 0px 4px 0px #3e6d8d;
    position: relative;
}

div.twi {
    background: #5EA9DD;
    -moz-box-shadow: 0px 4px 0px #186ba4;
    -webkit-box-shadow: 0px 4px 0px #186ba4;
    box-shadow: 0px 4px 0px #2b95df;
    position: relative;
}
div.in {
    background: #0177B5;
    -moz-box-shadow: 0px 4px 0px #035e8e;
    -webkit-box-shadow: 0px 4px 0px #035e8e;
    box-shadow: 0px 4px 0px #035e8e;
    position: relative;
}
div.pin {
    background: #D73532;
    -webkit-box-shadow: 0px 4px 0px #b51c19;
    -moz-box-shadow: 0px 4px 0px #b51c19;
    box-shadow: 0px 4px 0px #b51c19;
    position: relative;
}
div.git {
    background: #BBBBBB;
    -webkit-box-shadow: 0px 4px 0px #b51c19;
    -moz-box-shadow: 0px 4px 0px #b51c19;
    box-shadow: 0px 4px 0px #9a9a9a;
    position: relative;
}
div.git i {
    text-shadow: none;
}

	
 </style>
 
 <script>
	function clickMe(){
	 document.location.href = "login.php";
	
}

function clickMe2(){
	 document.location.href = "signup.php";
	
}
function clickMe3(){
	 document.location.href = "logout.php";
	
}
function clickMe4(){
	 document.location.href = "bagis.php";
	
}

$("#anybutton3").click(function(){
	document.location.href = "userinf.php";
	
	
});

// Screen-width breakpoint
var tc_breakpoint = 767;

jQuery(document).ready(function() 
{
	"use strict";
	
	// Switch tabs and update panels classes - Adjust container height
    jQuery(".vertab-container .vertab-menu .list-group a").click(function(e) 
	{
        var index = jQuery(this).index();
		var container = jQuery(this).parents('.vertab-container');
		var accordion = container.find('.vertab-accordion');
		var contents = accordion.find(".vertab-content");
		
		e.preventDefault();
		
        jQuery(this).addClass("active");
        jQuery(this).siblings('a.active').removeClass("active");
        
		contents.removeClass("active");
        contents.eq(index).addClass("active");
		container.data('current',index);

		//Adjust container height
		jQuery(this).parents('.vertab-menu').css('min-height',jQuery(container).children('.vertab-accordion').height() + 20);
    });
	
	// Collapse accordion panels (except the one the user just opened) and add "active" class to the panel heading 
	jQuery('.vertab-accordion').on('show.bs.collapse','.collapse', function() 
	{
		var accordion, container, current, index;
		
		accordion = jQuery(this).parents('.vertab-accordion');
		container = accordion.parents('.vertab-container');
		
		accordion.find('.collapse.in').each(function()
		{
			jQuery(this).collapse('hide');
		});		
		
		jQuery(this).siblings('.panel-heading').addClass('active');
		
		current = accordion.find('.panel-heading.active');
		index = accordion.find('.panel-heading').index(current);
		
		container.data('current',index);
	});
								   
	// Remove "active" class from heading when collapsing the current panel 
	jQuery('.vertab-accordion .panel-collapse').on('hide.bs.collapse', function () {
		jQuery(this).siblings('.panel-heading').removeClass('active');
	});	
	
	// Manage resize / rotation events
	jQuery( window ).on( "resize orientationchange", function(  ) 
	{
		resize_vertical_accordions();
	});
	
	// Scroll accordion to show the current panel
	jQuery(".vertab-accordion .panel-heading").click(function () 
	{
		var el = this;
		setTimeout(function(){jQuery("html, body").animate({scrollTop: jQuery(el).offset().top - 10 }, 1000);},500);
		
		return true;
	});
	
	//Initial Panels setup
	resize_vertical_accordions(  );
});

function resize_vertical_accordions(  ) 
{
	"use strict";
	jQuery('.vertab-container').each(function(i, e)
	{
		var index, menu, contents; 
		var container = jQuery(this);
		
		// Setup current tab/panel (default to first tab/panel)
		index = jQuery(this).data('current');
		if(index === undefined)
		{
			jQuery(this).data('index',0);
			index = 0;
		}
		
		// If using a desktop-size screen, manage as tabbed panels
		if( jQuery( window ).width() > tc_breakpoint)
		{
			// Reset panels heights (Bootstrap's accordions sets heights to zero)
			jQuery(this).find('.panel-collapse.collapse').css('height','auto');
			
			// Clean tab-navigation styles
			menu = jQuery(this).find('.vertab-menu .list-group a');
			menu.removeClass("active");

			// Clean tab-panels styles
			contents = jQuery(this).find(".vertab-accordion .vertab-content");
			contents.removeClass("active");
			
			// Update tab navigation and panels styles
			menu.eq(index).addClass('active');			
			contents.eq(index).addClass("active");
			
			// Update tab navigation's height to match current tab
			jQuery(this).children('.vertab-menu').css('min-height',jQuery(this).children('.vertab-accordion').height() + 20);			
		}
		else // If using a mobile device (phone + tablets), manage as accordion
		{
			// Close all panels
			jQuery(this).find('.vertab-content .panel-collapse.collapse').collapse('hide');
			
			// Clean styles from headings
			jQuery(this).find('.vertab-content .panel-heading').removeClass('active');
			
			// Wait until all panels have collapsed and mark the one the user selected as active.
			setTimeout(function()
			{
				jQuery(container).find('.vertab-content .panel-heading').eq(index).addClass("active");
				jQuery(container).find('.vertab-content .panel-collapse.collapse').eq(index).collapse('show');				
			},1000);

		}	
	});	
}

 </script>
 </html>
