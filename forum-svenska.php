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

		<ul>
			<li class="forumrub">
				<a href="createpost.php">Create Post</a>
			</li>
			<li class="forumrub">
				<a href="Forum.php">Forum</a>
			</li>
		</ul>

		<div id="gd">  




	<div id="next">Next</div>

<?php

echo "<ul>";
foreach ($db->query("SELECT * FROM svenska") as $row)
{
	echo "<li><comments={$row['id']}\"><strong>{$row ['username']}</strong></br>{$row ['content']}</br>\"{$row['time']}\"</a></li>";
}
echo "</ul>";
echo "<hr />";
         {

         }

?>

</div>

		<ul id="kurstopics">
			<a id="forumlink-matte" href="forum-matte.php">
				<li class="topicclass">Matte</li>
			<a/>
			<a id="forumlink-kemi" href="forum-kemi.php">
				<li class="topicclass">Kemi</li>
			</a>
			<a id="forumlink-fysik" href="forum-fysik.php">
				<li class="topicclass">Fysik</li>
			</a>
			<a id="forumlink-samhäll" href="forum-samhall.php">
				<li class="topicclass">Samhäll</li>
			</a>
			<a id="forumlink-idrott" href="forum-idrott.php">
				<li class="topicclass">Idrott</li>
			</a>
			<a id="forumlink-engelska" href="forum-engelska.php">
				<li class="topicclass">Engelska</li>
			</a>
			<a id="forumlink-programmering" href="forum-programmering.php">
				<li class="topicclass">Programmering</li>
			</a>

			<a id="forumlink-svenska" href="forum-svenska.php">
				<li class="topicclass">Svenska</li>
			</a>

			<a id="forumlink-teknik" href="forum-teknik.php">
				<li class="topicclass">Teknik</li>
			</a>
		</ul>





	</nav>






</div>









</body>









</html>

