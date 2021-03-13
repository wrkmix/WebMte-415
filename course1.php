<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neumorphism Cards By Code info</title>
    <link rel="stylesheet" href="course1.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer2.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js%22%3E"></script> -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

     <?php
 include ('nav.php');
?>

    <div class="container" style="font-family: sans-serif, Poppins;">
        <h1>Neumorphism Graph</h1>
        <div class="row">
            <div class="col">
                <div class="feature-img">
                    <!-- <img src="pic1.png" width="100%">
                    <img src="play.png" class="play-btn" onclick="playVideo('video.mp4')"> -->
                    <iframe width="100%" height="350px" src="https://www.youtube.com/embed/XGok4UIqu8E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course2.php"><img src="image/neudropdown.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course2.php" style="text-decoration: none;"><p>Neumorphism UI Custom Dropdown</p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course3.php"><img src="image/neuwave.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course3.php" style="text-decoration: none;"><p>Neumorphism CSS Wave Effect</p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course9.php"><img src="image/loading1.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course9.php" style="text-decoration: none;"><p>Neumorphism Loading Animation</p></a>
                </div>
            </div>

            <div class="description">
                <h1>Example</h1>
            </div>
        </div>


        <div class="graph" style="margin-left: 420px;">
            <div style="--i:0"></div>
            <div style="--i:1"></div>
            <div style="--i:2"></div>
            <div style="--i:3"></div>
            <div style="--i:4"></div>
        </div>

    </div>

    <!-- Site footer -->
	<footer class="site-footer" style="margin-top: 200px;">
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
</body>

</html>