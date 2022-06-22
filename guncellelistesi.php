<?php

include('connection.php');
include("functions.php");
 session_start();
 
 $sql = "SELECT * FROM users WHERE id=".$_GET['id'];
 
 $cevap = mysqli_query($con,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      


//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
 
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
  <div><button onclick = "clickMe3()" id = "anybutton2" type="button" class="btn btn-primary" >Log out</button></div>

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
			<form action="guncelkaydet2.php?id=<?php echo $gelen['id'] ?>" method = "POST">
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
                            <input id="user_name" type="text" name="user_name" value="<?php echo $gelen['user_name']?>" />  
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe2()" class="btn btn-primary" type="submit">Değiştir</button>
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
                            <input id="user_lastname" type="text" name="user_lastname" value="<?php echo $gelen['user_lastname']?>" /> 
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe2()" class="btn btn-primary" type="submit">Değiştir</button>
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
                            <input id="user_email" type="text" name="user_email" value="<?php echo $gelen['user_email']?>" /> 
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe2()" class="btn btn-primary" type="submit">Değiştir</button>
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
                            <input id="user_phoneN" type="text" name="user_phoneN" value="<?php echo $gelen['user_phoneN']?>" /> 
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe2()" class="btn btn-primary" type="submit">Değiştir</button>
                        </td>
                    </tr>
					<tr>        
                        <td>
                            <strong>
                                
                                Password                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                            <input id="password" type="text" name="password" value="<?php echo $gelen['password']?>" /> 
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe2()" class="btn btn-primary" type="submit">Değiştir</button>
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
          
                </tbody>
            </table>
			</form>
            </div>
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

	
	
	
	
<!-- menü ve içerik yanyana durması için satır oluştur -->

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
	   
	   
	   


 #success_tic .page-body{
  max-width:300px;
  background-color:#FFFFFF;
  margin:10% auto;
}
 #success_tic .page-body .head{
  text-align:center;
}
/* #success_tic .tic{
  font-size:186px;
} */
#success_tic .close{
      opacity: 1;
    position: absolute;
    right: 0px;
    font-size: 30px;
    padding: 3px 15px;
  margin-bottom: 10px;
}
#success_tic .checkmark-circle {
  width: 150px;
  height: 150px;
  position: relative;
  display: inline-block;
  vertical-align: top;
}
.checkmark-circle .background {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: #1ab394;
  position: absolute;
}
#success_tic .checkmark-circle .checkmark {
  border-radius: 5px;
}
#success_tic .checkmark-circle .checkmark.draw:after {
  -webkit-animation-delay: 300ms;
  -moz-animation-delay: 300ms;
  animation-delay: 300ms;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-name: checkmark;
  -moz-animation-name: checkmark;
  animation-name: checkmark;
  -webkit-transform: scaleX(-1) rotate(135deg);
  -moz-transform: scaleX(-1) rotate(135deg);
  -ms-transform: scaleX(-1) rotate(135deg);
  -o-transform: scaleX(-1) rotate(135deg);
  transform: scaleX(-1) rotate(135deg);
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
#success_tic .checkmark-circle .checkmark:after {
  opacity: 1;
  height: 75px;
  width: 37.5px;
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
  border-right: 15px solid #fff;
  border-top: 15px solid #fff;
  border-radius: 2.5px !important;
  content: '';
  left: 35px;
  top: 80px;
  position: absolute;
}

@-webkit-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@-moz-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}




 #success_tic .page-body{
  max-width:300px;
  background-color:#FFFFFF;
  margin:10% auto;
}
 #success_tic .page-body .head{
  text-align:center;
}
/* #success_tic .tic{
  font-size:186px;
} */
#success_tic .close{
      opacity: 1;
    position: absolute;
    right: 0px;
    font-size: 30px;
    padding: 3px 15px;
  margin-bottom: 10px;
}
#success_tic .checkmark-circle {
  width: 150px;
  height: 150px;
  position: relative;
  display: inline-block;
  vertical-align: top;
}
.checkmark-circle .background {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: #1ab394;
  position: absolute;
}
#success_tic .checkmark-circle .checkmark {
  border-radius: 5px;
}
#success_tic .checkmark-circle .checkmark.draw:after {
  -webkit-animation-delay: 300ms;
  -moz-animation-delay: 300ms;
  animation-delay: 300ms;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-name: checkmark;
  -moz-animation-name: checkmark;
  animation-name: checkmark;
  -webkit-transform: scaleX(-1) rotate(135deg);
  -moz-transform: scaleX(-1) rotate(135deg);
  -ms-transform: scaleX(-1) rotate(135deg);
  -o-transform: scaleX(-1) rotate(135deg);
  transform: scaleX(-1) rotate(135deg);
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
#success_tic .checkmark-circle .checkmark:after {
  opacity: 1;
  height: 75px;
  width: 37.5px;
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
  border-right: 15px solid #fff;
  border-top: 15px solid #fff;
  border-radius: 2.5px !important;
  content: '';
  left: 35px;
  top: 80px;
  position: absolute;
}

@-webkit-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@-moz-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
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
	
	
})




   



 </script>
 </html>
