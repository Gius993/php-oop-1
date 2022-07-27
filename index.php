<?php
	class Movie {
		public $title;
		public $genre;
		public $duration = 0;
		public $buget = 0;
	}

	$jerrypoker = new Movie();
	$jerrypoker->title = 'Jerry Poker e i doni del dealer pt 1';
	$jerrypoker->genre = 'Fantasy';
	$jerrypoker->duration = 18;
	$jerrypoker->buget = 111000000;

	$scontrotitanic = new Movie();
	$scontrotitanic->title = 'Scontro tra titanic';
	$scontrotitanic->genre = 'Drammatico';
	$scontrotitanic->duration = 89;
	$scontrotitanic->buget = 400000000;
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<h1><?php echo $jerrypoker->title;   ?></h1>
		<p></p>
		<p></p>
		<p></p>
	</div>
</body>
</html>