<?php

include("connection.php");
include("functions.php");
session_start();

//sorguyu hazirliyoruz


if(isset($_SESSION['user_id'])) {
	$aa = $_SESSION['id'];
	echo "<style>";
	echo " #anybutton{ visibility : hidden;} ";
	echo " #anybutton2{ visibility : hidden;} ";
	echo " #anybutton4{ visibility : visible; left:95%; position: absolute;} ";
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
	echo "<label>Giriş Yapmalısın! </label>";
	
	echo "<script>function clickMe4(){
	 document.location.href = 'login.php';}</script>";
}


$sql = "SELECT * FROM users where id ='$aa'";
$cevap = mysqli_query($con,$sql);
$gelen=mysqli_fetch_array($cevap);

if($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$user_phoneN = $_POST['user_phoneN'];
		$bagis = $_POST['bagis'];
		$bagisTutari = $_POST['bagisTutari'];
		if($user_phoneN != $gelen['user_phoneN']) {
			echo '<label id=lab> Telefon Numarası Eşleşmiyor </label>';
			
		}
		
		else {
		$query = "insert into bagis (telNo,bagis,bagisTutari) values ('$user_phoneN', '$bagis', '$bagisTutari')";
		mysqli_query($con, $query);
		header("Location:index.php");
		die;
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
   <!-- türkçe karakter desteği ayarı --> 
   <meta http-equiv="Content-Type"  
      content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>	  
   <body>
      <div class="container">
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="https://www.yenicedernegi.com/wp-content/uploads/2019/04/yard%C4%B1m-icon.png" width="65" height="65" class="d-inline-block align-top" alt="">   
  </a>
  <br>
  <h3 class="navbar-text"><a href = "index.php">Online Bağış</a></h3>
  </nav>
  
  <div><button  onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign up</button></div>
  <div><button  onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>  
  <div><button onclick = "clickMe4()" id = "anybutton3" type="button" class="btn btn-primary" ><?php echo $_SESSION['user_name'];?></button></div>
  <div><button  onclick = "clickMe3()" id = "anybutton4" type="button" class="btn btn-primary" >Log out</button></div>
  <div id="mes"> </div>
<!-- navbar başlangıcı --> 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
		<li style="font-family: 'Josefin Sans', sans-serif;"><a href="index.php">Ana Sayfa</a></li>
        <li><a href="bagislarim.php">Bağışlarım</a></li>
		<li><a href="hakkimizda.php">Hakkımızda</a></li>
    </ul>
  </div>
</nav>
      
	

	<div>
	<div class="row"> 
	<form action="" method="POST">
	<table class="table table-user-information">
                <tbody>
				
				
					<tr>        
                        <td>
                            <strong>
                                 
                                Telefon numarası                                       
                            </strong>
                        </td>
                        <td class="text-primary">
                              <div class="input-group mb-3">
							  <div class="input-group-prepend">
			
							  <span> 
							  <input type="text" class="form-control" name="user_phoneN">
							  </span>
							  </div>
							  </div>
                        </td>
						
                    </tr>
					        
                    <tr>    
                        <td>
                            <strong>     
                                Bağış                                                
                            </strong>
                        </td>
                        <td>
                            <div>
							<select id="search" name="bagis" class="form-select form-select-lg mb-3">
								<option value="" class="selected">Select search category</option>
								<option value="Kurban" name="Kurban">Kurban</option>
								<option value="Zekat" name="Zekat">Zekat</option>
								<option value="Egitim" name="Eğitim">Eğitim</option>
								<option value="Yetim" name="Yetim">Yetim</option>
								<option value="Cami" name="Cami">Cami ve Mescit</option>
								<option value="Afet" name="Afet">Afet</option>
								<option value="Hafız" name="Hafız">Hafız</option>
								<option value="Su Kuyusu" name="Su">Su Kuyusu</option>
								<option value="Ramazan" name="Ramazan">Ramazan</option>
							</select>
						</div>
                        </td>
						
						
                    </tr>
					
                    <tr>        
                        <td>
                            <strong>
                                 
                                Bağış Tutarı                                         
                            </strong>
                        </td>
                        <td class="text-primary">
                              <div class="input-group mb-3">
							  <div class="input-group-prepend">
			
							  <span> 
							  <input type="text" class="form-control" name="bagisTutari">
							  </span>
							  </div>
							  </div>
                        </td>
						
                    </tr>


                    <tr>        
                        <td>
                            
                        </td>
                        <td class="text-primary">
                            <button id="bagisyap" onclick = "clickMe4()" class="btn btn-primary" type="submit">Bağış Yap</button>
                        </td>
						
                    </tr>
					<tr>        
                        <td>
                            
                        </td>
                        <td class="text-primary">
                            <label id = "lab"  for="css"></label><br> 
                        </td>
						
                    </tr>
	</table>
	</form>
	</div>
	</div>

<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://www.vuslat.org.tr/wp-content/uploads/2022/05/kurban-vacib-bagis.jpg" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>KURBAN KARDEŞİNE UMUT OLSUN</h2>
<p>Bu yıl da Afrika, Asya, Avrupa ve Güney Amerika kıtasında muhtelif ülkelerde bayramın birinci günü bayram namazının ardından vekaletlerinizle kurbanlarınızı kesiyor, daha önce bölgede görevli ekiplerimizce belirlenen ihtiyaç sahibi mazlum kardeşlerimize et olarak dağıtıyor, kurbanınızın kesildiğini hem sms yoluyla hem de çağrı merkezimiz tarafından arayarak bildiriyor; “kurbanınız …… ülkesinde kesilmiştir, Allah kabul eylesin, şükür namazınızı kılabilirsiniz” müjdesini veriyoruz.</p>
<p>Hem kalp mutmainliği hem de mutluluğun paylaşılmasında güzelliklerin hasıl olacağı niyetiyle vekaletinizin okunarak kurbanınızın kesildiği videoyu bayram ile birlikte telefonlarınıza ulaştırıyoruz.</p>
<p>Bu Kurban Bayramında da kesilecek kurbanlar ile bayram sevinci yaşayacak kardeşlerimize adak, akika veya şükür kurbanlarınızı da aynı bedel ile ulaştırabilir, bağışınızın açıklama kısmına kurbanın hangi niyetle kesildiğini ifade ederek niyetinize uygun olarak kurbanınızı kestirebilirsiniz. Kurban kesim videonuz en kısa sürede tarafınıza iletilecektir.</p>

</div>
</div>
</div>
</div>

<br>
<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3GL51GmP9h20D_xS3_M90ZFnq3Dryyx3b3Q&usqp=CAU" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>ZEKAT MUHTAÇ GÖNÜLLERE ULAŞMAKTIR</h2>
<p>Yurt içinde ve yurt dışında hayırseverlerimizin bizlere emaneti olan zekat, fitre ve fidyeleri içinde bulundukları çaresizliği umuda, hüznü tebessüme dönüştürmek ve zorlu mücadelelerinde yanlarında olduğumuzu göstermek için derneğimiz tarafından özenle tespit edilen gerçek ihtiyaç sahiplerine ulaştırıyoruz.  </p>
<p>Afrika, yardım faaliyetlerinin en fazla yapıldığı kıtalar arasında bulunur. Bangladeş, Arakan, Suriye, Filistin ve Yemen gibi bir çok yoksul ülkenin bulunduğu Asya Kıtası’nda da sizlerin bağışlarıyla yardım ediyoruz fakat daha çok yardım bekleyen kardeşlerimiz var. </p>
<p>Yapılan farklı türdeki yardımlar sayesinde Afrika’da, Suriye'de, Yemen'de, Filistin'de bulunan insanların açlık, susuzluk veya diğer ihtiyaçlarını gidermeye çalışıyoruz. Bu yüzden Dünyanın hangi köşesinde olursa olsun insana yardım eli uzatmak, çok uzaklarda olsalar da birileri açken asla tok yatmamak, insanlığın birlik ve dirliği için eldeki nimetleri paylaşmak ve mesafeleri yok sayarak gönül köprüleri kurmak için mücadele etmekteyiz.  </p>
</div>
</div>
</div>
</div>
<BR>
<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://www.hiranur.org.tr/uploads/activities_v/egitim_02103215197.jpg?w=120" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>SİZİN DE BİR HAFIZINIZ OLSUN</h2>
<p>Afrikalı ve Asyalı yavrularımız eğitimlerini daha temiz ve nezih ortamlarda, her türlü maddi kaygıdan uzak bir şekilde tamamlayıp ailelerine, dinlerine ve bölgelerine faydalı bireyler olabilsinler diye birçok faaliyete imza atıyoruz.</p>
<p>Aynı zamanda eğitim faaliyetlerimize yurt içinde de devam ediyoruz. Medreselerimizde eğitim gören, çoğu yetim olan ve savaş mağduru ailelerden gelen yavrularımız eğitimlerini en güzel şekilde sürdürebilsinler diye elimizden geleni yapıyoruz. Eğitimleri süresince onlardan hiçbir şekilde ücret talep etmiyor, giyim, beslenme, barınma, tedavi gibi yaşamsal ihtiyaçlarını da dernek olarak biz karşılıyoruz.</p>
<p>Başlatmış olduğumuz yurt içi burs projeleriyle de yavrularımız eğitimlerine her türlü maddi kaygıdan uzak bir şekilde devam edebilsinler ve hafız olabilsinler diye onlara burslar sağlıyoruz. Geleceğimiz olan yavrularımız eğitimlerine devam edebilsinler diye çalışmalarımızı kararlılık ve azimle sürdürmeye devam edeceğiz. </p>

</div>
</div>
</div>
	

	
</div>

<BR>
<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://hiranur.org.tr/uploads/activities_v/sukuyusu_023516423.jpg" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>SU GİBİ AZİZ OL</h2>
<p>Susuzluk ve kuraklık Afrika ve Asya'nın birçok ülkesini esir almış durumda. Bazı bölgelerde halk köylerinde su olmasına rağmen temiz ve içilebilir olmadığından ya da temiz su, kilise bahçelerindeki kuyularda olduğundan dolayı uzak köylerdeki kuyulara ulaşabilmek için kilometrelerce yol yürümek zorunda kalıyor.</p>
<p>Kardeşlerimizin yaşadığı bu insanlık dramına göz yummadık, onların bu çilesine son vermek için faaliyete başladığımız günden beri hayırseverlerimizle sırt sırta vererek yüzlerce su kuyusunun açılışını gerçekleştirdik ve bu kuyularla çaresizce kendilerine uzanacak umut elini bekleyen binlerce mazlumun umutlarının yeşermesine vesile olduk. </p>
<P>Yurt dışı ekibimizin bölgede titizlikle yürüttüğü incelemeler sayesinde temiz ve içilebilir suya erişimin olmadığı bölgeler ve köyler tespit ediliyor. Bunun yanında su kuyusu talep eden köyler de yerlerinde inceleniyor. </P>
</div>
</div>
</div>
	

	
</div>	

<BR>
<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://www.vuslat.org.tr/wp-content/uploads/2021/10/yetim-vuslat-2-1024x683.jpg" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>YERYÜZÜNÜN KUTLU EMANETLERİ SEVGİNİZLE BÜYÜYOR</h2>
<p>İnsani yardım ve İslami eğitim çalışmalarımıza Türkiye’de ve dünyada 30 farklı mazlum coğrafyada devam ediyoruz ve yetimlerin yüzündeki tebessüm, gönüllerindeki dua olmaya devam ediyoruz. </p>
<p>küresel HIV salgını dolayısıyla 30 yıl boyunca, tahminen 17 milyon çocuk HIV nedeniyle bir veya iki ebeveynini kaybetti; bu çocukların yüzde doksanı yaşıyor. Yılda 1 milyondan fazla çocuk bu ölümcül virüs dolayısıyla yetim ve öksüz kalıyor. </p>
<P>Bu problemi biliyor ve problemi çözebilmek adına yetimlerin en çok yaşadığı bölgeler Asya, Afrika, Latin Amerika ve Orta Doğu’da yetimlere destek oluyoruz. Başlatmış olduğumuz projeler ile yetimlere destek sağlıyor, yetimhane inşa ediyor, hali hazırda hizmet veren yetimhanelere destek oluyoruz. Her geçen gün eklenen yeni çalışmalarımızla yetim evlatlarımızı topluma geri kazandırmayı, kendi kendine yetebilecek, dinini yaşayabilecek ve öğrendikleri ile gelecek nesillere ışık tutacak fertler olabilmeleri için çalışıyoruz.</P>
</div>
</div>
</div>
	

	
</div>
<BR>
<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://cdn.iddef.org/site/2020_05_05_22_49_39_IjAkXMeUWZyy2yn.jpg" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>NİYETLENDİK PAYLAŞMAYA</h2>
<p>Manevi hayatımızda çok özel bir yeri olan on bir ayın sultanı Ramazan oruç, Kur’an, sabır, tövbe ve tefekkür ayı olduğu kadar hayır ve hasenatta birbirimizle yarıştığımız bir aydır.</p>
<p>Ramazan ayında tecrübe ve güveniyle Afrika, Asya, Ortadoğu ve Balkanlar olmak üzere 40 ülkedeki başta İslami eğitim ve hafızlık okuyan talebeler olmak üzere gerçek ihtiyaç sahiplerine hayırseverlerin bağışlarını ilk elden teslim ediyor. </p>
<P>Afrika, Asya, Ortadoğu ve Balkanlar'da 40 ülke 263 bölgeye yardım ulaştırıyoruz. Afganistan, Suriye, Yemen, Gazze ve Etiyopya gibi acil yardım bölgelerine ağırlık veriyoruz ve Afrika'daki Müslümanlara hayırseverlerin desteğiyle iyilik elini uzatıyoruz. Zekat, fitre emanetlerini yerel görevlilerince bizzat ulaştırarak teslim ediyoruz ve Afrika ve Asya'da kumanya yardımı yapıyor, sıcak iftar yemeği dağıtıyoruz.</P>
</div>
</div>
</div>
	

	
</div>	

<BR>
<div class = "row">
 <div class="container-fluid">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<img src="https://gallery.tdv.org/images/mescit-2-tr.jpg" alt="responsive webite" class="responsive" width="570" height="400">
</div>
<div class="col-xl-6 col-lg-6 col-md-6" style="border:1px solid #ddd">
<h2>BİR TUĞLA DA BENDEN OLSUN</h2>
<p>Mescitlerin varlığı Müslümanların birliğinin teminatıdır. Sevgili Peygamberimiz cami ve mescit yapılmasına ayrı bir önem vermiştir. Resul-i Ekrem (s.a.s), “Her kim ki Allah için bir mescit bina ederse, Allah ona Cennet’te bu mescidin benzeri bir köşk bina eder” buyurarak cami ve mescit yapılmasını teşvik etmiştir.</p>
<p>Dünyanın dört bir yanında mazlum ve mağdurların gıda, barınma, eğitim gibi ihtiyaçlarını karşılarken cami ve mescit gibi ibadethaneler de inşa ederek toplumların dini hayatını destekte bulunuyoruz. </p>
<P>Gerçekleştirdiğimiz her projede olduğu gibi en büyük destekçimiz vefakar milletimiz olmuştur. Mescit projemiz kapsamında da siz değerli hayırseverlerimizin destekleriyle gittikleri her yerde İslam medeniyetinin bir göstergesi olan cami ve mescit inşa eden ecdadımızın mirasını yaşatacak mazlum coğrafyalara bilgi, hikmet, ilim ve ahlak mekanı, birliğin ve beraberliğin sembolü mescitler inşa edeceğiz.</P>
<p>Yapacağınız bağışlarla bu hayra destek olabilirsiniz. </p>
</div>
</div>
</div>
	

	
</div>	

	
</div>




</div>
 
</body>

<style>

.search-form{
	text-align: center;
	color: #999;	
}
#Hafız{
	text-align: center;		
}

#search {
text-align:center;
	width: 400px;
	height: 25px;
}

#Hafız, #Kurban, #Zekat, #Ramazan, #Yetim, #Su, #Afet, #Cami,
#Eğitim {
	text-align:center;
	margin-top: 10px;
	width: 400px;
	height: 25px;
	display: none;
}

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
       left:90%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   #anybutton4 {   
       top:2%;
       left:80%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	      

 </style>
 
 <script> 


function clickMe3(){
	 document.location.href = "logout.php";
	
}
function clickMe4(){
	 document.location.href = "userinf.php";
	
}
function clickMe(){
	 document.location.href = "login.php";
	
}	
function clickMe2(){
	 document.location.href = "signup.php";
	
}	
 

</script>

	  
   </body>
</html>