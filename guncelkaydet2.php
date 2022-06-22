<?php

include("connection.php");
include("functions.php");


extract($_POST);
			$id = $_GET['id'];
			$uppercase = preg_match('@[A-Z]@', $password);
			$lowercase = preg_match('@[a-z]@', $password);
			$number    = preg_match('@[0-9]@', $password);
			$specialChars = preg_match('@[^\w]@', $password);
			$query = "select * from users where id != '$id' and user_name = '$user_name' and user_lastname = '$user_lastname' limit 1";
			$result = mysqli_query($con, $query);
			$query2 = "select * from users where id != '$id' and user_phoneN = '$user_phoneN' limit 1";
			$result2 = mysqli_query($con, $query2);
			//save to database
			
			if(mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0){
				echo "<td id=td1>"."Bilgilerinizi gözden geciriniz!"."</td>";
				
			}
			else if(strlen($user_phoneN) != 10) {
				echo "Telefon numarası 10 karakterden oluşmalı!";
			}
			elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
					 echo "Geçersiz email formatı";
			}
			else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
				echo "Şifreniz en az sekiz karakterli, en az bir büyük harf, özel karakter(?,/,-) ve bir sayı içermelidir!";
			}
			else {
			
			  $sql ="UPDATE users ".
			  "SET  user_name='$user_name',user_lastname='$user_lastname',user_email='$user_email',user_phoneN='$user_phoneN', password ='$password' ".
			  "where id=".$_GET['id'];}
//sorguyu veritabanina gönderiyoruz.

$cevap = mysqli_query( $con,$sql);

$sql2 = "SELECT * FROM users WHERE id=".$_GET['id'];
 
$cevap2 = mysqli_query($con,$sql2);
$gelen=mysqli_fetch_array($cevap2);									
						
															



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
  <h3 class="navbar-text"><a href = "index.php">Online Bağış</a></h3>
  </nav>	
  <div><button style = "visibility: hidden;" onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>
  <div><button style = "visibility: hidden;" onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign Up</button></div>
  <div><button id = "anybutton3" type="button" class="btn btn-primary" ><?php echo $gelen['user_name']?></button></div>
  <div><button onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Log out</button></div>
<!-- navbar başlangıcı --> 
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Ana Sayfa</a></li>
      <li><a href="bagislarim.php">Bağışlarım</a></li>
      <li><a href="hakkimizda.php">Hakkımızda</a></li>
    </ul>
  </div>
</nav>
<!-- navbar bitişi --> 
  
<!-- jumbotron başlangıcı -->
    
	
	<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://previews.123rf.com/images/solargaria/solargaria1709/solargaria170900007/85362512-user-icon,-male-avatar-in-business-suit,-businessman-flat-icon.-man-in-business-suit.-avatar-of-businessman.-flat-internet-icon-in-rounded-shape.-web-and-mobile-design-element.-male-profile.-vector-illustration.jpg" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <strong>Information</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
				
                  
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $gelen['user_name']?> 
                        </td>
						<td class="text-primary">
                            <button id = "anybutton4" onclick = "clickMe3()" class="btn btn-primary">Değiştir</button>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user text-primary"></span>  
                                Lastname                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                          <?php echo $gelen['user_lastname']?>
                        </td>
						<td class="text-primary">
                            <button id = "anybutton4" onclick = "clickMe3()" class="btn btn-primary">Değiştir</button>
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                           <?php echo $gelen['user_email']?>
                        </td>
						<td class="text-primary">
                            <button id = "anybutton4" onclick = "clickMe3()" class="btn btn-primary">Değiştir</button>
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-phone text-primary"></span> 
                                Phone Number                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $gelen['user_phoneN']?>
                        </td>
						<td class="text-primary">
                            <button id = "anybutton4" onclick = "clickMe3()" class="btn btn-primary">Değiştir</button>
                        </td>
                    </tr>
					<tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-phone text-primary"></span> 
                                Password                                             
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $gelen['password']?> 
                        </td>
						<td class="text-primary">
                            <button id = "anybutton4"  onclick = "clickMe3()" class="btn btn-primary">Değiştir</button>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                created                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $gelen['date'];?>
                        </td>
						</tr>
				        <tr>
					<td  class="text-danger">
                           <button id = "anybutton4"  onclick = "clickMe5()" class="btn btn-danger">Hesabı Sil</button> 
                    </td>
					</tr>
                </tbody>
            </table>			
            </div>
        </div>
    </div>
</div>





<div id="success_tic" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <a class="close" href="#" data-dismiss="modal">&times;</a>
      <div class="page-body">
    <div class="head">  
      <h3 style="margin-top:5px;">Lorem ipsum dolor sit amet</h3>
      <h4>Lorem ipsum dolor sit amet</h4>
    </div>

  <h1 style="text-align:center;"><div class="checkmark-circle">
  <div class="background"></div>
  <div class="checkmark draw"></div>
</div><h1>

  </div>
</div>
    </div>

  </div>



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
       left:90%;
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
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   


	   
	   
	   
 </style>
 
 <script>
function clickMe3(){
	 document.location.href = "guncellelistesi.php?id=<?php echo $gelen['id']?>";
	
}
function clickMe2(){
	 document.location.href = "logout.php";
	
}

$("#anybutton3").click(function(){
	document.location.href = "userinf.php";
	
	
})
$("#anybutton2").click(function(){
	document.location.href = "logout.php";
	
	
})

function clickMe5(){
	 document.location.href = "kayitsil.php?id=<?php echo $gelen['id']?>";
	
}
 



 </script>
 </html>


