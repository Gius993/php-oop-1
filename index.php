<?php
	class Movie {
		public $title;
		public $genre;
		public $duration = 0;
		public $budget = 0;
		
		public function __construct($_title, $_genre){
			$this->title = $_title;
			$this->genre = $_genre;
		}
		public function relaseDate(){
			if($this->title='Jerry Poker e i doni del dealer pt 1'){
				
				echo 'Domani al cinema';
			}else{
				echo 'prossimamente';
			}			
		}
	}	
		$jerrypoker = new Movie('Jerry Poker e i doni del dealer pt 1', 'Fantasy');
		$jerrypoker->duration = 18;
		$jerrypoker->budget = 111000000;
		
		$scontrotitanic = new Movie('Scontro tra titanic', 'Dramma');
		$scontrotitanic->duration = 89;
		$scontrotitanic->budget = 400000000;
		
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
		<h1><?php echo $jerrypoker->title; ?></h1>
		<p><?php echo $jerrypoker->genre; ?></p>
		<p><?php echo $jerrypoker->duration; ?></p>
		<p><?php echo $jerrypoker->budget; ?></p>
		<h2><?php echo $jerrypoker->relaseDate()   ?></h2>
	</div>

	<div>
		<h1><?php echo $scontrotitanic->title; ?></h1>
		<p><?php echo $scontrotitanic->genre; ?></p>
		<p><?php echo $scontrotitanic->duration; ?></p>
		<p><?php echo $scontrotitanic->budget; ?></p>
		<h2><?php echo $scontrotitanic->relaseDate()   ?></h2>
	</div>
</body>
</html>