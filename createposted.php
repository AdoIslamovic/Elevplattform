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

		<h2 style="margin-left:400px">You have posted</h2>

	</nav>

	<h2>Matte</h2>
	<form method="post" action="Postcreater-matte.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>
		<h2>Kemi</h2>
	<form method="post" action="Postcreater-kemi.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>
		<h2>Fysik</h2>
	<form method="post" action="Postcreater-fysik.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>

		<h2>Samhäll</h2>
	<form  method="post" action="Postcreater-samhall.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>
	

	
		<h2>Idrott</h2>
	<form  method="post" action="Postcreater-idrott.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>
	
	
		<h2>Engelska</h2>
	<form  method="post" action="Postcreater-engelska.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>

			<h2>Programmering</h2>
	<form  method="post" action="Postcreater-programmering.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>

			<h2>Svenska</h2>
	<form  method="post" action="Postcreater-svenska.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>

			<h2>Teknik</h2>
	<form  method="post" action="Postcreater-teknik.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


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