<?php

include("connection.php");
include("functions.php");
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
	
	
		
		
		

		
		$bagisTuru = 
		$bagis = $_POST['bagis'];
		$bagisTutari = $_POST['bagisTutari'];
		
		$query = "insert into bagis (bagis,bagisTuru,bagisTutari) values ('$bagis', '$bagisTuru', '$bagisTutari')";
		mysqli_query($con, $query);
		header("Location:index.php");
		die;
	}

?>

<script>

$('#Ramazan').on('change', function()
{
    alert(this.value); //or alert($(this).val());
});

</script> 

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
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVKk61AGUStw7DbDq8WiZdJzIL0Rcnfz3uZw&usqp=CAU" width="65" height="65" class="d-inline-block align-top" alt="">   
  </a>
  <br>
  <h3 class="navbar-text"><a href = "index.php">Online Bağış</a></h3>
  </nav>
  
  <br>
  <div id = "mes"> </div>	
  <div><button onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>
  <div><button onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign Up</button></div>
  <div><button id = "anybutton3" type="button" class="btn btn-primary" ><?php echo $_SESSION['user_name'];?></button></div>
  <div><button  onclick = "clickMe3()" id = "anybutton4" type="button" class="btn btn-primary" >Log out</button></div>
  
<!-- navbar başlangıcı --> 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#anasayfa" data-toggle="tab">Ana Sayfa</a></li>
      <li><a href="#">Bağışlar</a></li>
      <li><a href="#">Bağışlarım</a></li>
      <li><a href="#">İletişim</a></li>
	 
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
                                Bağış                                                
                            </strong>
                        </td>
                        <td>
                            <div>
							<select id="search" name="bagis" class="form-select form-select-lg mb-3">
								<option value="" class="selected">Select search category</option>
								<option value="Kurban" name="Kurban">Kurban</option>
								<option value="Zekat" name="Zekat">Zekat</option>
								<option value="Eğitim" name="Eğitim">Eğitim</option>
								<option value="Yetim" name="Yetim">Yetim</option>
								<option value="Cami" name="Cami">Cami & Mescit</option>
								<option value="Afet" name="Afet">Afet</option>
								<option value="Hafız" name="Hafız">Hafız</option>
								<option value="Su" name="Su">Su Kuyusu</option>
								<option value="Ramazan" name="Ramazan">Ramazan</option>
							</select>
						</div>
                        </td>
						
						
                    </tr>
					<tr>        
                        <td>
                            <strong>
                                Bağış Türü                                                
                            </strong>
                        </td>
                        <td>
                            
						
		<select class="bagisTuru" id="Kurban" name="bagisTuru">
      <option value="Vekaleten Kurban Yurt İçi">Vekaleten Kurban Yurt İçi</option>
      <option value="Vekaleten Kurban Yurt Dışı">Vekaleten Kurban Yurt Dışı</option>
      <option value="Vekaleten Kurban Filistin">Vekaleten Kurban Filistin</option>
	  <option value="Bayramlık">Bayramlık</option>
    </select>
	</div>
	
		<select class="bagisTuru" id="Eğitim" name="bagisTuru">
			<option value="İmam Hatip Lisesi Burs Programı">İmam Hatip Lisesi Burs Programı</option>
			<option value="İlahiyat Burs Programı">İlahiyat Burs Programı</option>
			<option value="Bilim ve Teknik Burs Programı">Bilim ve Teknik Burs Programı</option>
			<option value="Eğitim Yardımı">Eğitim Yardımı</option>
			
		</select>
	</div>
	
	<div >
		<select class="bagisTuru" id="Ramazan" name="bagisTuru">
			  <option value="Fidye">Fidye</option>
			  <option value="Alışveriş Yardım Kartı">Alışveriş Yardım Kartı</option>
			  <option value="Gıda Paketi">Gıda Paketi</option>
			  <option value="Yemin Kefareti">Yemin Kefareti</option>
        </select>
	</div>
	
	<div >
		<select class="bagisTuru" id="Zekat" name="bagisTuru">
			  <option value="Fidye">Zekat</option>
        </select>
	</div>
	
	<div >
		<select class="bagisTuru" id="Yetim" name="bagisTuru">
			  <option value="Yetim Genel Bağış">Yetim Genel Bağış</option>
			  <option value="Yetim Etkinlik ve Sosyal Destek">Yetim Etkinlik ve Sosyal Destek</option>
			  <option value="Yurt Dışı Yetim Eğitim Desteği">Yurt Dışı Yetim Eğitim Desteği</option>
			  <option value="Yurt Dışı Yetim Eğitim ve Barınma Desteği">Yurt Dışı Yetim Eğitim ve Barınma Desteği</option>
        </select>
	</div>
	
	<div >
		<select class="bagisTuru" id="Cami" name="bagisTuru">
			  <option value="Camilere Yardım">Camilere Yardım</option>			 
			  <option value="Mescit">Mescit</option>		  
        </select>
	</div>
	
	<div>
		<select class="bagisTuru" id="Afet" name="bagisTuru">
			  <option value="Yangın">Yangın</option>			 
			  <option value="Sel">Sel</option>	
			  <option value="Deprem">Deprem</option>			  
        </select>
	</div>
	
	<div >
		<select class="bagisTuru" id="Su" name="bagisTuru">
			  <option value="Asya Su Kuyusu">Asya Su Kuyusu</option>			 
			  <option value="Afrika Su Kuyusu">Afrika Su Kuyusu</option>	
			  <option value="Asya Şadırvan">Asya Şadırvan</option>	
			  <option value="Sudan Su Kuyusu">Sudan Su Kuyusu</option>				  
        </select>
	</div>
	
	<div >
		<select class="bagisTuru" id="Hafız" name="bagisTuru">
			  <option value="Hafız(Genel Bağış)">Hafız(Genel Bağış)</option>			 
			  <option value="Hafız Giyim">Hafız Giyim</option>	
			  <option value="Hafize Giyim">Hafize Giyim</option>			  
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
                        </td>
						
                    </tr>


                    <tr>        
                        <td>
                            
                        </td>
                        <td class="text-primary">
                            <button onclick = "clickMe4()" class="btn btn-primary" type="submit">Bağış Yap</button>
                        </td>
						
                    </tr>
	</table>
	</form>
	</div>




	
	<br> <br>
	  <div class="row">
<!-- 4 hücre genişliğinde sol menü -->
  <div class="col-sm-3">
 
<!-- nav ile sol menü başlangıcı-->
<ul class="nav nav-pills nav-stacked">
  <li class="active" ><a href="#heading-one" data-toggle="tab">Neden Halil Pazarlama?</a></li>
  <li><a href="#heading-two" data-toggle="tab">Müşteri Görüşleri</a></li>
  <li><a href="#heading-three" data-toggle="tab">Referanslar</a></li>
  <li><a href="#heading-three" data-toggle="tab">Bize Ulaşın</a></li>
</ul>
<!-- nav ile sol menü bitişi-->
 
<!-- 4 hücre genişliğinde sol menü bitişi -->  
</div>
 
<!-- 8 hücre genişliğinde ana içerik -->
<div class="col-sm-5">
 
<!-- panel başlangıcı -->
<div class="tab-content flex-center">
  
  <div class="tab-pane fade show" id="heading-one">
  <p class="active" align="justify">Pazarlama firmaların, hangi malların veya hizmetlerin müşterilerinin ilgisini çekeceğini tayin etmeleri ve satışlar, iletişim ve işletme idaresi geliştirmeleri için stratejileri belirlemeleri sürecidir. Pazarlama süreci, bir bütünleştirilmiş süreç olup bunun vasıtasıyla firmalar müşterileri için değer yaratmakta ve bunun karşılığında müşterilerden deger kapabilmek için güçlü müşteri ilişkileri kurmaktadırlar.</p>
  </div>
  <div class="tab-pane fade show" id="heading-two"> 
  <p align="justify">Github</p>
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
function clickMe3(){
	 document.location.href = "logout.php";
	
}

$("#anybutton3").click(function(){
	document.location.href = "userinf.php";
	
	
});
 $(document).ready(function() {
					
        	$("#search").change(function(e) {
       			hideAll();
						$(e.target.options).removeClass();
						var $selectedOption = $(e.target.options[e.target.options.selectedIndex]);
						$selectedOption.addClass('selected');
       			$('#' + $selectedOption.val()).show();
        	});
        });

        function hideAll() {
        	$("#Kurban").hide();
			$("#Ramazan").hide();
        	$("#Yetim").hide();
			$("#Su").hide();
			$("#Afet").hide();
			$("#Hafız").hide();
			$("#Eğitim").hide();
			$("#Zekat").hide();
			$("#Cami").hide();
		}
		
		
		
		
		
   
    });
});	
	

</script>

	  
   </body>
</html>