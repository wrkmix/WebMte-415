<?php session_start();
     include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
	<form action="login_db.php" method="POST">
        <div class="form">
            <h1>LOGIN</h1>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-github"></i>
            </div>
                <input type="text" placeholder="Username/Email" name="username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit">LOGIN</button>
            <hr>
            <p>Don't Have Account</p>
            <p onclick="toggle()">Register</p>
        </div>
		</form>
    </div>
    <div class="container dark active" id="reg">
	<form action="register_db.php" method="POST">
        <div class="form">
            <h1>REGISTER</h1>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-github"></i>
            </div>
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Email"name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" >REGISTER</button>
            
            <hr>
            <p>Already have an account?</p>
            <p onclick="toggle()">Login</p>
        </div>
		</form>
	</div>
		
    <script>
        function toggle() {
            document.getElementById("reg").classList.toggle("active");
        }
		
    </script>

	
</body>
</html>