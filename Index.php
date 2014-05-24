<?php
	require 'core/init.php';
	$general->logged_in_protect();
?>
<!DOCTYPE html>
<html>



<head>
<link type="text/css" rel="stylesheet" href="Elevplattform.css"/>
<title>Elevplattformen</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body background="Background.jpg">

	

	
	

		


<header>



<nav id="NavImg">
	<a href="Home.php"><img id="Startsida" src="Homebutton.png"/></a>

	<ul id="NavigationBar">
		<li class="rubrik">
			<a href="News.php">News</a>
		</li>
		<li class="rubrik">
			<a href="Forum.php">Forum</a>
		</li>

		<li class="rubrik">
			<a href="Kurser.php">Kurser</a>
		</li>
		
	</ul>


</nav>




</header>


<div id="container">
		
		<h3>Welcome to the elevplattform!</h3>
		<a href="register.php" class="a-btn"><span class="a-btn-text">Register now</span> 
    <span class="a-btn-slide-text">Sign up</span>
    <span class="a-btn-icon-right"><span></span></span>
</a>

<a href="login.php" class="a-btn">
    <span class="a-btn-text">Enter</span> 
    <span class="a-btn-slide-text">Log in</span>
    <span class="a-btn-icon-right"><span></span></span>
</a>

<img id="book" src="book.png"/>
</div>










</body>












</html>





