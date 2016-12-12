<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pozdro od IV et</title>
<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Arima+Madurai&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
<article>
	<?php 
$data=date("d");
$data_swiat=28;
if($data>=$data_swiat)
	print "Wesołych świąt";
else{
	$result = $data_swiat - $data;
	print "Do świąt pozostało ". $result." dni";
}
 ?></article>
 <footer>Wykonał Maciej Stępień IVet </footer>
</body>
</html>