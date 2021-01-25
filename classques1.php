<?php
 if(isset($_POST['submit'])){
 	if(empty($_POST['Name'])||empty($_POST['Email'])||empty($_POST['Contact'])||empty($_POST['City'])||empty($_POST['Course'])||empty($_POST['videogame'])||empty($_POST['sport'])||empty($_POST['Dance'])||empty($_POST['Programming']))
 		echo "no input provided first enter value";
 	else
 	{
    $_POST['Name'];
    $_POST['Email'];
    $_POST['Contact'];
    $_POST['City'];
    $_POST['Course'];
    $_POST['videogame'];
    $_POST['Sport'];
    $_POST['Dance'];
    $_POST['Programming'];
    }
 }
 else
 	echo " no input";
?>
<html>
	<head>
		<title>class question</title>
	</head>
	<body>
		<form method="get" action="classques1.php">
			Name:-<input type="text" name="Name"><br>
			Email:-<input type="Email" name="Email"><br>
			Contact:-<input type="Contact" name="Contact"><br>
			City:-<input type="text" name="City"><br>
			Course:-<input type="text" name="Course"><br>
			Interest:-
			videogame<input type="checkbox" name="videogame"><br>
			Sport<input type="checkbox" name="Sport"><br>
			Dance<input type="checkbox" name="Dance"><br>
			Programming<input type="checkbox" name="Programming"><br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>

