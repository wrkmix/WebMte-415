<?php 
    session_start();

	$in = "Login"; 
	$uee = "logingus.php";
    if (isset($_GET['logout'])) {
        session_destroy();
		unset($_SESSION['username']);
        header('location: index.php');
    }
	if (isset($_SESSION['username'])) {
		$uee = "#";
		$in = ($_SESSION['username']);
	}
?>
 <nav>
        <div class ="menu">
        <input type="checkbox" id="check"> 
        <div class ="logo"><a href="index.php">TNI Course Online</a></div>
        <ul>
            <label class="button cancel" for="check"><i class="fas fa-times"></i></label>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>

            <li><a href="<?php echo $uee;  ?>"><?php echo $in; ?></a></li>

		<?php
			if (isset($_SESSION['username'])) {
		?>
			<li><a href="index.php?logout='1' ">Logout</a></li>
		<?php
			}
		?>
        </ul>
        <label class="button bars"for="check"><i class="fas fa-bars"></i></label>
        </div>
    </nav>
   
	 