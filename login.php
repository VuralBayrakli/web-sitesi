<?php 

session_start();

	include("connection.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
		{
		
		//something was posted
		$user_name = $_POST['user_name'];
		$user_phoneN = $_POST['user_phoneN'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($user_phoneN))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' and  user_phoneN = '$user_phoneN'";
			
			$result = mysqli_query($con, $query);
			;

			if($result)
			{
				if(mysqli_num_rows($result))
				{

					$user_data = mysqli_fetch_array($result);
					
					if($user_data['password'] === $password)
					{   
						$_SESSION['id'] = $user_data['id'];
						$_SESSION['user_id'] = $user_data['user_id'];
						$_SESSION['user_name'] = $user_data['user_name'];
						$_SESSION['user_lastname'] = $user_data['user_lastname'];
						$_SESSION['user_email'] = $user_data['user_email'];
						$_SESSION['user_phoneN'] = $user_data['user_phoneN'];
						$_SESSION['date'] = $user_data['date'];
						header("Location:index.php");
						die;
					}
				}
			}
			
			echo "Bilgilerinizi tekrar gözden geçiriniz! ";

		}else
		{
			echo "Bilgilerinizi tekrar gözden geçiriniz!";
		}
		
			
		
		
	}
	
	

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
		/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 550px;
    min-height: 600px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}

	</style>
	<div id = "ack"> </div>
	<div class="wrapper">
        <div class="logo">
            <img src="data:image/png;base64,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" alt="">
        </div>
		
		
        <div class="text-center mt-4 name">
           Giriş Yap
        </div>
        <form  method = "POST" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="user_name" id="user_name" placeholder="Ad...">
            </div>
			<div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="user_phoneN" id="user_phoneN" placeholder="Telefon Numarası...">
            </div>
			
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Şifre...">
            </div>
            <button name = "submit" value = "submit" id = "submit" type = "submit" class="btn mt-3">Login</button>
        </form>
		<br>
        <div class="text-center fs-3">
         Hesabın yok mu?   <a href="signup.php" >Üye Ol</a>
        </div>
		
    </div>
	
	<?php
	



?>
	
	
</body>


</html>