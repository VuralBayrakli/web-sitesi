<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">
	<br>
	
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  
	  a.button1{
display:inline-block;
padding:0.35em 1.2em;
border:0.1em solid #124574;
margin:0 0.3em 0.3em 0;
border-radius:0.12em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#478574;
text-align:center;
transition: all 0.2s;
}
a.button1:hover{
color:#FFFFFF;
background-color:#44C20B ;
}
@media all and (max-width:30em){
a.button1{
display:block;
margin:0.4em auto;
}


}





.container1{
  padding-top:30px;
  min-height:100%;
  text-align:center;
  background: linear-gradient(0deg, rgba(34,195,104,1) 0%, rgba(45,77,253,1) 80%);
}
.headline{
  text-align:center;
 
}
.headline  h1{
    font-size:35px;
    font-family: 'Montserrat', sans-serif;
    color:#fff;
  }

.social-buttons{
  display:inline-block;
  background: rgba(256,256,256,0.5);
  padding:20px;
  padding-bottom: 5px;
  border-radius:10px;
  text-align:center;
  margin:20px 10px;
  box-shadow: 0px 0px 32px -7px #00199f;
}
  
/* Helper class to divide the icons */
.social-margin {
  margin-right: 15px;
}

a,
a:hover,
a:focus,
a:active {
  text-decoration: none;
}

.social-icon {
  margin-bottom: 15px;
   box-sizing: border-box;
  -moz-border-radius: 138px;
  -webkit-border-radius: 138px;
  border-radius: 138px;
  border: 5px solid;
  text-align: center;
  width: 50px;
  height: 50px;
  display: inline-block;
  line-height: 1px;
  padding-top: 11px;
  transition: all 0.5s;
}
.social-icon:hover {
    transform: rotate(360deg)scale(1.3);
  }
  /* Facebook Button Styling */
 .facebook {
    font-size: 22px;
    padding-top: 9px;
    border-color: #3b5998;
    background-color: #3b5998;
    color: #ffffff;
   
  }
  .facebook:hover {
    background-color: #ffffff;
    color: #3b5998;
  }
  /* Twitter Button Styling */
.twitter {
    font-size: 22px;
    padding-top: 10px;
    padding-left: 2px;
    border-color: #55acee;
    background-color: #55acee;
    color: #ffffff;
    
  }
  .twitter:hover {
    background-color: #ffffff;
    color: #55acee;
  }
  /* Google+ Button Styling */
  .google-plus {
    font-size: 22px;
    padding-top: 9px;
    padding-left: 2px;
    background-color: #dd4b39;
    color: #ffffff;
    border-color: #dd4b39;
    
  }
  .google-plus :hover {
    background-color: #ffffff;
    color: #dd4b39;
  }
  /* Linkedin Button Styling */
  .linkedin {
    font-size: 24px;
    padding-top: 8px;
    padding-left: 1px;
    background-color: #0976b4;
    color: #ffffff;
    border-color: #0976b4;
    
  }
  .linkedin :hover {
    background-color: #ffffff;
    color: #0976b4;
  }
  /* Pinterest Button Styling */
.pinterest {
    font-size: 22px;
    padding-top: 9px;
    background-color:  #cb2027;
    color: #ffffff;
    border-color:  #cb2027;
    
  }
  .pinterest:hover {
    background-color: #ffffff;
    color:  #cb2027;
  }
  /* Behance Button Styling */
  .behance {
    font-size: 22px;
    padding-top: 9px;
    background-color: #1769ff;
    color: #ffffff;
    border-color: #1769ff;
    
  }
  .behance :hover {
    background-color: #ffffff;
    color: #1769ff;
  }

  /* Github Button Styling */
 .github {
    font-size: 22px;
    padding-top: 9px;
    background-color: #4183c4;
    color: #ffffff;
    border-color: #4183c4;
    
  }
  .github:hover {
    background-color: #ffffff;
    color: #4183c4;
  }
  /* Youtube Button Styling */
 .youtube {
    font-size: 22px;
    padding-top: 9px;
    padding-left: 0px;
    background-color: #bb0000;
    color: #ffffff;
    border-color: #bb0000;
    
  }
  .youtube  :hover {
    background-color: #ffffff;
    color: #bb0000;
  }
  /* Soundcloud Button Styling */
  .soundcloud {
    font-size: 22px;
    padding-top: 9px;
    padding-left: 0px;
    background-color: #ff3a00;
    color: #ffffff;
    border-color: #ff3a00;
    
  }
  .soundcloud :hover {
    background-color: #ffffff;
    color: #ff3a00;
  }

	  
    </style>

    
  </head>
  <body>
    
<main>
  <div class="container py-4">
	
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://www.yenicedernegi.com/wp-content/uploads/2019/04/yard%C4%B1m-icon.png"
          height="40"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bagislarim.php">Bağışlarım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="hakkımızda.php">Hakkımızda</a>
        </li>
		<li class="nav-item">
          <a href="bagis.php" class="button1">Bağış Yap</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
	
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-6 fw-bold">Hakkımızda</h1>
        <p class="col-md-8 fs-4">Sürekli büyüyen ve genişleyen faaliyet alanlarıyla insanlığa hizmet etmek ve her insanın vuslatına vesile olmak için çıktığımız yolculuk  Bursa’da başladı. Mazlum ve mağdur coğrafyaların her daim yanında olma gayretimiz, vahdete erişme azmimiz ilk günkü heyecanla  Bursa’da başlayan faaliyetlerimizle devam ediyor. Gönüllere kavuşmak için çıkılan yolculukta artan gönüllü ve bağışçıların destekleri ile birçok hayırlı çalışmayı hayata geçirmiş ve tüm inancımızla faaliyetlerimize devam ediyoruz.</p>
        <p class="col-md-8 fs-4">İyiliğe kavuşmak için yürüttüğümüz faaliyetler;</p>
		<p class="col-md-8 fs-4">
		     <ul>
			 <li>Ramazan ve Kurban aylarına özel çalışmalar</li>
             <li>Ümmet Sofraları</li>
            <li> Yetim Çalışmaları</li>
             <li> Hafızlık ve İslami İlimler Eğitimi</li>
             <li> İslami İlimler Akademisi Dev Külliye Projesi</li>
              <li>Cami ve Kardeş Medrese Projeleri</li>
             <li> Ekmek Yardımları</li>
             <li> Adak, Akika ve Şükür Kurbanları</li>
             <li> Su Kuyuları</li>
             <li> Mültecilere Yönelik Yurt içi ve Yurt dışı Çalışmaları</li>
            <li> Sosyal sorumluluk projeleri</li>
           <li> Acil yardım çalışmaları</li>
			<li>Afet ve olağanüstü durumlarda koordinasyona destek</li>
			</ul>
			</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Misyonumuz</h2>
          <p>Yeryüzündeki her insanın yaşama, barınma ve temel ihtiyaçlarını giderme hakkına ulaşması için dil, inanç, ırk ve renk ayırt etmeksizin; elimizle, dilimizle malımızla ve dualarımızla gayret etmek, her daim mazlumdan yana olup, tüm insanlığın evrensel insani ve İslami değerlere sahip bir hayata kavuşmasında etkin rol olmak için vuslata vasıl olmak niyetiyle çalışıyoruz.</p>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Vizyonumuz</h2>
          <p>Günümüz dünyasının en çok ihtiyaç duyduğu alanlardan biri haline gelen insani yardım çalışmalarının öncüsü olma yolunda, kalıcı çözümler üreterek mazlum coğrafyalara adalet getirme düşüncesinde, yoksulluk ve insani krizlerin takipçisi olup yerinde müdahaleler ile sorunları çözme uğruna yük omuzlayan, geleceğe umutla bakan örnek şahsiyetlerin yetiştirilmesini sağlayıp bu vesile ile dünyanın kavuşacağı adaletin özleminde olan ve çalışmalarına bu minvalde yön veren bir düstur ile gayret ediyoruz.

Gönüllere kavuşmak için çıktığımız yolculukta “Kavuşmak Ne Güzel” diyoruz.</p>
          
        </div>
      </div>
	  
    </div>
	<br>
	
	 <div class = "container1">
	 <div class="social-buttons">        
        <!-- facebook  Button -->
                <a href="http://www.facebook.com" target="blank" class="social-margin"> 
                  <div class="social-icon facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i> 
                  </div>
                </a>
                <!-- pinterest Button -->
                <a href="https://pinterest.com/" target="blank"  class="social-margin">
                  <div class="social-icon pinterest">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </div>
                </a>
                <!-- LinkedIn Button -->
                <a href="https://www.linkedin.com/in/vuralbayrakl%C4%B1" class="social-margin" target="blank">
                  <div class="social-icon linkedin">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </div> 
                </a>
              <!-- Github Button -->
                <a href="https://github.com/VuralBayrakli"  target="blank"  class="social-margin">
                  <div class="social-icon github">
                    <i class="fa fa-github-alt" aria-hidden="true"></i>
                  </div>
                </a>
                <!-- Youtube Button -->
                <a href="http://youtube.com/" target="blank"  class="social-margin">
                  <div class="social-icon youtube">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                  </div> 
                </a>
                <!-- Behance Button -->
              
          <!-- TwitterButton -->
                <a href="http://twitter.com/" target="blank" class="social-margin">
                  <div class="social-icon twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </div> 
                </a>
        </div>
        </div>



  </div>
</main>


    
  </body>
</html>