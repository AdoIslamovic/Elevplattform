<?php
	require 'core/init.php';
	$general->logged_out_protect();
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


	<ul style="list-style: none;>" id="NavigationBar">
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

	<div id="logout"><strong>You are logged in</strong>

<form name="input" action="logout.php" method="get">
	<input type="submit" value="logout">
</form>


</div>


</nav>


</header>




<nav id="kursNav">

<ul id="table">



<li><a id="link-matte" href="#matte" class="Buttonleft">Matte</a>
</li>
<li><a id="link-kemi" href="#kemi" class="Buttonleft">Kemi</a>
</li>
<li><a id="link-fysik" href="#fysik" class="Buttonleft">Fysik</a>
</li>
<li><a id="link-sam" href="#sam" class="Buttonleft">Samhäll</a>
</li>
<li><a id="link-idrott" href="#idrott" class="Buttonleft">Idrott</a>
</li>

<li>
	<a id="link-engelska" href="#engelska" class="Buttonleft">Engelska</a>
</li>
<li>
	<a id="link-Programmering" href="#Programmering" class="Buttonleft">Programmering</a>
</li>


<li>
	<a id="link-svenska" href="#svenska" class="Buttonleft">Svenska</a>
</li>

<li>
	<a id="link-teknik" href="#teknik" class="Buttonleft">Teknik</a>
</li>



	
</ul>

</nav>




<div id="kurscontainer">
	<h2 id="containertopic">Välkommen till kurserna!</h2>

<div id="matte" class="panel"><h2>Matte</h2></div>
<div id="kemi" class="panel"><h2>Kemi</h2></div>
<div id="fysik" class="panel"><h2>Fysik</h2></div>
<div id="sam" class="panel"><h2>Samhäll</h2></div>
<div id="idrott" class="panel"><h2>Idrott</h2></div>
<div id="engelska" class="panel"><h2>Engelska</h2></div>
<div id="Programmering" class="panel"><h2>Programmering</h2></div>
<div id="svenska" class="panel"><h2>Svenska</h2></div>
<div id="teknik" class="panel"><h2>Teknik</h2></div>



</div>









</body>









</html>

