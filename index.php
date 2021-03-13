
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js%22%3E"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-Yu3tDzlofwBycOX5qb6K4tGJKGD72LA/9ckyioo8plGOdLwIeESQgo+KY4M+gvBJvDguqYeweLVTIn+S/9ZC/Q==" crossorigin="anonymous" />
    <title>Project</title>
</head>
<body>

   <?php
 include ('nav.php');
?>

       

   <h1 style="margin-top: 50px;">Slide Carousel image</h1>
    <div class="carousel">
        <div class="options">
            <div class="option active" style="--optionBackground:url(https://cdn.dribbble.com/users/2202649/screenshots/9527558/media/2caa8dfdadc4f3264149966b8132e51b.png);">
               <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url(https://cdn.dribbble.com/users/3757473/screenshots/10058380/neumorph_ui_elements_4x.png);">
               <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url(https://i.pinimg.com/originals/0d/da/1e/0dda1ef51dc2192cd5930702294d2715.png);">
               <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url(https://www.nwx.fr/wp-content/uploads/2020/04/NWX-NEUMORPHISME.png);">
               <div class="shadow"></div>
            </div>
            <div class="option" style="--optionBackground:url(https://miro.medium.com/max/3200/1*3TCUhY6B334ZQmmWC_Elqw.png);">
               <div class="shadow"></div>
            </div>
         </div>
       </div>

    <div class = "main-container">
        <h2>Course Categories</h2>
        <p>MTE-435 Thai-Nichi Institute of Technology</p>
        <div class = "filter-container">
            <div class = "category-head">
                <ul>
                    <div class = "category-title active" id = "all">
                        <li>All</li>
                        <span><i class = "fas fa-border-all"></i></span>
                    </div>
                    <div class = "category-title" id = "loading">
                        <li>Loading</li>
                        <span><i class="fas fa-spinner"></i></span>
                    </div>
                    <div class = "category-title" id = "isometric">
                        <li>Isometric</li>
                        <span><i class="fas fa-dice-d6"></i></i></span>
                    </div>
                    <div class = "category-title" id = "glassmorphism">
                        <li>Glassmorphism</li>
                        <span><i class="fas fa-clone"></i></span>
                    </div>
                    <div class = "category-title" id = "neumorphism">
                        <li>Neumorphism</li>
                        <span><i class="fas fa-layer-group"></i></span>
                    </div>
                    <div class = "category-title" id = "gradient">
                        <li>Gradient</li>
                        <span><i class="fas fa-adjust"></i></span>
                    </div>
                </ul>
            </div>

            <div class = "posts-collect">
                <div class = "posts-main-container">
                    <!-- single post -->
                    <div class = "all neumorphism">
                        <div class = "post-img">
                            <img src = "image/neugraph.png" alt = "post">
                            <span class = "category-name">Neumorphism</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>December 21, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;1K
                                </span>
                            </div>
                            <h2>Neumorphism Graph</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course1.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all neumorphism">
                        <div class = "post-img">
                            <img src = "image/neudropdown.png" alt = "post">
                            <span class = "category-name">Neumorphism</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>November 05, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;27
                                </span>
                            </div>
                            <h2>Neumorphism UI Custom Dropdown</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course2.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all neumorphism">
                        <div class = "post-img">
                            <img src = "image/neuwave.png" alt = "post">
                            <span class = "category-name">Neumorphism</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>October 26, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;8
                                </span>
                            </div>
                            <h2>Neumorphism CSS Wave Effect</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course3.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all loading">
                        <div class = "post-img">
                            <img src = "image/3dloading.png" alt = "post">
                            <span class = "category-name">loading</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>September 25, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;88
                                </span>
                            </div>
                            <h2>Neumorphism Loading Animation</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course9.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all loading">
                        <div class = "post-img">
                            <img src = "image/loading1.png" alt = "post">
                            <span class = "category-name">loading</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>July 23, 2019</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;717
                                </span>
                            </div>
                            <h2>3D Loading Animation Effects</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course8.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all glassmorphism">
                        <div class = "post-img">
                            <img src = "image/glass-profile.png" alt = "post">
                            <span class = "category-name">glassmorphism</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>December 16, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;110
                                </span>
                            </div>
                            <h2>CSS Glassmorphism Profile Card UI</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course6.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all glassmorphism">
                        <div class = "post-img">
                            <img src = "image/glass-creditcard.png" alt = "post">
                            <span class = "category-name">glassmorphism</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>December 08, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;1.6K
                                </span>
                            </div>
                            <h2>Glass morphism 3D Flip Debit Card UI</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course7.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->

                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all isometric">
                        <div class = "post-img">
                            <img src = "image/isometric-text.png" alt = "post">
                            <span class = "category-name">isometric</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>April 04, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;758
                                </span>
                            </div>
                            <h2>3D Isometric Text Effects</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course10.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all isometric">
                        <div class = "post-img">
                            <img src = "image/mockup.png" alt = "post">
                            <span class = "category-name">isometric</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>September 12, 2019</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;894
                                </span>
                            </div>
                            <h2> iPhone Box Mockup Isometric</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course11.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all gradient">
                        <div class = "post-img">
                            <img src = "image/text-gradient.png" alt = "post">
                            <span class = "category-name">gradient</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>September 10, 2020</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;65
                                </span>
                            </div>
                            <h2>Gradient Text Effect</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course4.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                    <!-- single post -->
                    <div class = "all gradient">
                        <div class = "post-img">
                            <img src = "image/button-gradient.png" alt = "post">
                            <span class = "category-name">gradient</span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-calendar"></i>September 04, 2019</span>
                                <span>
                                    <i class = "fas fa-thumbs-up"></i>&ensp;2K
                                </span>
                            </div>
                            <h2>Animated gradient buttons on hover</h2>
                        </div>
                        <button type = "button" class = "read-btn"><a href="course5.php" style="text-decoration: none;">Read All</a></button>
                    </div>
                    <!-- end of single post -->
                </div>
            </div>
        </div>
    </div>

      <!-- Site footer -->
	<footer class="site-footer">
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

    <!-- JS file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha512-U6K1YLIFUWcvuw5ucmMtT9HH4t0uz3M366qrF5y4vnyH6dgDzndlcGvH/Lz5k8NFh80SN95aJ5rqGZEdaQZ7ZQ==" crossorigin="anonymous"></script>
    <script src = "main.js"></script>
</body>
</html>

