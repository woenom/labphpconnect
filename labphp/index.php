<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	include 'connect.php';
	$query="SELECT * FROM content";
		$result = $mysqli->query('SELECT * FROM `content`');
		while ($rows = $result->fetch_assoc()){
			echo('<h1>'.$rows['h1'].'</h1>'.$rows['text']);
		}
	?>
	
	
	
</body>
</html>