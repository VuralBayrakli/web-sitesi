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
  	
  <div><button onclick = "clickMe()" id = "anybutton" type="button" class="btn btn-primary" >Login</button></div>
  <div><button onclick = "clickMe2()" id = "anybutton2" type="button" class="btn btn-primary" >Sign Up</button></div>
  <div><button id = "anybutton3" type="button" class="btn btn-primary" ><?php echo $_SESSION['user_name'];?></button></div>
  <div><button  onclick = "clickMe4()" id = "anybutton6" type="button" class="btn btn-primary" >Log out</button></div>

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
                                <span  class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $gelen['user_name'];?>  
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe3()" id = "anybutton4" class="btn btn-primary" >Değiştir</button>
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
                            <?php echo $gelen['user_lastname'];?>
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe3()" id = "anybutton4" class="btn btn-primary" >Değiştir</button>
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
                            <?php echo $gelen['user_email'];?>
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe3()" id = "anybutton4" class="btn btn-primary">Değiştir</button>
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
                            <?php echo $gelen['user_phoneN'];?>
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe3()" id = "anybutton4" class="btn btn-primary" >Değiştir</button>
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
                            <?php echo $gelen['password'];?>
                        </td>
						<td class="text-primary">
                            <button onclick = "clickMe3()" id = "anybutton4" class="btn btn-primary" >Değiştir</button>
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
	   
	   
	   
	   
	   
	   #anybutton4:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
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
	 document.location.href = "guncellelistesi.php?id=<?php echo $gelen['id']?>";
	
}

function clickMe4(){
	 document.location.href = "logout.php";
	
}
function clickMe5(){
	 document.location.href = "kayitsil.php?id=<?php echo $gelen['id']?>";
	
}






 </script>
 </html>
