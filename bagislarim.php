<?php

include('connection.php');
include("functions.php");
session_start();


if(isset($_SESSION['user_id'])) {
	echo "<style>";
	echo " #anybutton{ visibility : hidden;} ";
	echo " #anybutton2{ visibility : hidden;} ";
	echo " #anybutton6{ visibility : visible; left:90%; position: absolute;} ";
	echo " #anybutton3{ visibility : visible; left:80%; position: absolute;} ";
	echo "</style>";
	
}
else{
	echo "<style>";
	echo " #anybutton{ visibility : visible;} ";
	echo " #anybutton6{ visibility : hidden;} ";
	echo " #anybutton3{ visibility : hidden;} ";
	echo " #anybutton2{ visibility : visible;} ";
	echo "</style>";
	echo '<label id=lab>Giriş Yapmalısınız! </label>';
	
}

$aa = $_SESSION['id'];
//sorguyu hazirliyoruz

$sql = "SELECT * FROM users where id ='$aa'";
$cevap = mysqli_query($con,$sql);
$gelen=mysqli_fetch_array($cevap);

$telNo = $gelen['user_phoneN'];

$sql2= "SELECT * FROM bagis where telNo = '$telNo'";
$cevap2 = mysqli_query($con,$sql2);
//$gelen3=mysqli_fetch_array($cevap2);



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
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="https://www.yenicedernegi.com/wp-content/uploads/2019/04/yard%C4%B1m-icon.png" width="65" height="65" class="d-inline-block align-top" alt="">   
  </a>
  <br>
  <h3 class="navbar-text"><a href="index.php">Online Bağış</a></h3>
  </nav>
  <div><button  onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign up</button></div>
  <div><button  onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>  
  <div><button onclick = "clickMe3()" id = "anybutton3" type="button" class="btn btn-primary" ><?php echo $_SESSION['user_name'];?></button></div>
  <div><button  onclick = "clickMe4()" id = "anybutton6" type="button" class="btn btn-primary" >Log out</button></div>

<!-- navbar başlangıcı --> 
<br><br>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Ana Sayfa</a></li>    
      <li id="bagislarim" class="active"><a href="bagislarim.php">Bağışlarım</a></li>
      <li><a href="hakkimizda.php">Hakkımızda</a></li>
    </ul>
  </div>
</nav>
<!-- navbar bitişi --> 
  
<!-- jumbotron başlangıcı -->
    
	
	<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        
		
		
        <div class="col-md-10">
            <strong>Bağışlarım</strong><br>
            <div class="table-responsive">
			
            <table id="table" class="table table-user-information">
                <tbody>
					 <?php
			
                while($gelen3 = mysqli_fetch_array($cevap2))
                {
				?>
                    <tr>        
                            
                        <td >
                            <strong>                               
                                Bagis:                                              
                            </strong>
							<?php echo $gelen3['bagis']; ?>
                        </td>
                        
						
                       
                        <td>
                            <strong>                              
                                Bağış Tutarı:                                           
                            </strong>
							<?php echo $gelen3['bagisTutari']; ?> &#x20BA; 
                        </td>
                        <td>
                            
                        
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Bağış Tarihi:                                                
                            </strong>
							<?php echo $gelen3['date']; ?>
                        </td>
                                      		
					</tr>
							
				<?php } ?>
					
                </tbody>
				
            </table>

            </div>
        </div>
    </div>
</div>
</div>
	
	
	
	
	
<br> <br>	
	
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
 
<!-- alt bölüm bitişi -->
 
<!-- taşıyıcı bitişi -->
</div>
 
</body>

<style>
#anybutton {
       top:2%;
       left:100%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
#anybutton2 {
       top:2%;
       left:85%;
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
	   #anybutton5 {
       top:2%;
       left:50%;
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   
	   .inf-content{
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
	
	   }
	   #anybutton6 {   
       top:2%;
       
       width:120px;
       height:40px;
       position: absolute;
       z-index: 5;
       
       }
	   
	   
 </style>
 
 <script>

function clickMe3(){
	 document.location.href = "userinf.php";
	
}

function clickMe4(){
	 document.location.href = "logout.php";
	
}
function clickMe(){
	 document.location.href = "login.php";
	
}
function clickMe2(){
	 document.location.href = "signup.php";
	
}




 </script>
 </html>
