<?php
	
	require 'core/init.php';

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

<div id="Information">


	<nav id="forumnav">

		<ul id="forumtopic">
			<li class="forumrub">
				<a href="createpost.php">Create Post</a>
			</li>
			<li class="forumrub">
				<a href="Forum.php">Forum</a>
			</li>
		</ul>

		

	</nav>


	<form method="post" action=""> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="Content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			<h4>Ämne:</h4>
			<select id="Ämne" name="Ämne">
  				<option value="Matte">Matte</option>
  				<option value="Kemi">Kemi</option>
  				<option value="Fysik">Fysik</option>
  				<option value="Samhäll">Samhäll</option>
  				<option value="Idrott">Idrott</option>
  				<option value="Engelska">Engelska</option>
  				<option value="Programmering">Programmering</option>
  				<option value="Svenska">Svenska</option>
  				<option value="Teknik">Teknik</option>
			</select>
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>
		<?php
			
			if (empty($errors) === false){
				echo '<p>' . implode('</p><p>', $errors) . '</p>';
			}

		?>




</div>
















</body>









</html>