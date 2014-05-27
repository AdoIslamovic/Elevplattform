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

	<div id="logout"><strong>You are logged in</strong>

<form name="input" action="logout.php" method="get">
	<input type="submit" value="logout">
</form>


</div>


</nav>


</header>



<div id="Newsfeed">
	<img id="newsimgleft" src="News.png"/> <h1 style="text-align:center">Nyheter</h1><img id="newsimgright" src="News.png"/>

	<div id="newspost">

		<form method="post" action="newsposts.php">
			<input id="newstext" type="text" name="content" >
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
			

			<input style="margin-left:450px" action="" type="submit" name="submit" value="submit news">
		</form>
			
			

	</div>

<div id="dbnews">
<?php

	echo "<ul>";
	foreach ($db->query("SELECT * FROM posts") as $row)
	{
		echo "<li><comments={$row['id']}\"><strong>{$row ['username']}</strong></br>{$row ['content']}</strong></br>{$row ['time']}</br>\"</a></li>";
	}
	echo "</ul>";
	echo "<hr />";
	         {

         		}


?>
</div>

</div>












</body>








</html>