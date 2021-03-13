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
    <link rel="stylesheet" href="course2.css">

    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>

      <?php
 include ('nav.php');
?>

    <div class="container">
        <h1 style="font-family: sans-serif, Poppins;">Neumorphism UI Custom Dropdown</h1>
        <div class="row" style="font-family: sans-serif, Poppins;">
            <div class="col">
                <div class="feature-img">
                    <!-- <img src="pic1.png" width="100%">
                    <img src="play.png" class="play-btn" onclick="playVideo('video.mp4')"> -->
                    <iframe width="100%" height="350px" src="https://www.youtube.com/embed/RQtgMCajbX8?list=WL" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <a href="course1.php"><img src="image/neugraph.png" style="margin-top: 4px; margin-left: 4px;"></a>
                    </div>
                    <a href="course1.php" style="text-decoration: none;"><p>Neumorphism Graph</p></a>
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

            <div class="description" style="margin-top: 10px; margin-bottom: 50px;">
                <h1>Example</h1>
            </div>
        </div>

        <ul class="dropdown" id="d" style="margin-left: 450px; margin-top: -40px;">
            <input type="text" value="Location" readonly="" id="v">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
            <ul class="options" id="o">
    
                <li cName="Country 1">Country 1</li>
                <li cName="Country 2">Country 2</li>
                <li cName="Country 3">Country 3</li>
                <li cName="Country 4">Country 4</li>
    
            </ul>
        </ul>
    </div> 

    <!-- Site footer -->
	<footer class="site-footer" style="margin-top: 350px;">
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
    
        
      <script type="text/javascript">
        var dropdown = document.getElementById('d');
        var options = document.getElementById('o');
        var input = document.getElementById('v');

        dropdown.addEventListener('click' ,function(){
            this.classList.toggle('show');
        })
        options.addEventListener('click' ,function(event) {
            const listItem = event.target;
            // console.log();
            const value = listItem.attributes.cName.value;
            input.value=value;
        })
    </script>
</body>

</html>