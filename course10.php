<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neumorphism Cards By Code info</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer2.css">
    <link rel="stylesheet" href="course10.css">

    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

     <?php
 include ('nav.php');
?>

    <div class="container">
        <h1 style="font-family: sans-serif, Poppins;">3D Isometric Text Effects</h1>
        <div class="row" style="font-family: sans-serif, Poppins;">
            <div class="col">
                <div class="feature-img">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/H7lEwIGggpA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course8.php"><img src="image/loading1.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course8.php" style="text-decoration: none;"><p>Neumorphism Loading Animation</p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course9.php"><img src="image/3dloading.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course9.php" style="text-decoration: none;"><p>3D Loading Animation Effects</p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course11.php"><img src="image/mockup.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course11.php" style="text-decoration: none;"><p>iPhone Box Mockup Isometric</p></a>
                </div>
            </div>

            <div class="description" style="margin-top: -170px; margin-bottom: 50px;">
                <h1>Example</h1>
            </div>

            <div id="text" data-text="3D Isometric">3D Isometric</div>
        </div>
    </div>

    <!-- Site footer -->
	<footer class="site-footer" style="margin-top: 300px;">
		<div class = "container">

			<div class="grid-container">
				<div class="grid-item">
					
					<img src = "image/tni.png" class = "logo-img">

				</div>

				<div class="grid-item inner-grid-container">
					
					<div class="grid-item"><a href="">About Us</a></div>   
					<div class="grid-item"><a href="">Health and Social Care</a></div>   
					<div class="grid-item"><a href="">Privacy Policy</a></div>   
					<div class="grid-item"><a href="">Blog</a></div>   
					<div class="grid-item"><a href="">Contact us</a></div>   
					<div class="grid-item"><a href="">Finance</a></div>
					<div class="grid-item"><a href="">Cookie Policy</a></div>   
					<div class="grid-item"><a href="">Jobs</a></div>   


				</div>

				<div class="grid-item">
					<div class = "social-buttons">
						<a href= ""><i class="fab fa-instagram circle-icon"></i></a>
						<a href= ""><i class="fab fa-facebook circle-icon"></i></a>
						<a href= ""><i class="fab fa-line circle-icon"></i></a>
						<a href= ""><i class="fab fa-twitter circle-icon"></i></a>
					</div>
				</div>   
			</div>
			<hr>

			<p>Copyright © 2021 | Worakan | Kijphiphat | Thai-Nichi Institute of Technology</p>

		</div>
	</footer>

	<script type = "text/javascript">
		var text = document.getElementById('text')
		var shadow = '';
			for(var i = 0; i<30;i++)
				{
					shadow +=(shadow? ',':'')+ -i*1+'px '+ i*1+'px 0 #d9d9d9';
				}
			text.style.textShadow = shadow;
	</script>

</body>

</html>