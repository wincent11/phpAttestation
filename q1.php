<?php
$numberPoints = 0;
$countOfCorrectAnswers = 0;

	$name = htmlentities($_POST['fullname']);
	$q1 = htmlentities($_POST['q1']);
	if ($q1 == "OK") {
		$numberPoints+=5;
		$countOfCorrectAnswers++;
	}else{
		$numberPoints-=5;
	}

	$q2 = htmlentities($_POST['q2']);
	if ($q2 == "Infinite loop") {
		$numberPoints+=5;
		$countOfCorrectAnswers++;
	}else{
		$numberPoints-=5;
	}

	$q3 = htmlentities($_POST['q3']);
	if ($q3 == "Ctrl - C") {
		$numberPoints+=5;
		$countOfCorrectAnswers++;
	}else{
		$numberPoints-=5;
	}

	$q4="No";
	if ($q4=="Yes") {
		$numberPoints+=2.5;
		$countOfCorrectAnswers++;
	}else{
		$numberPoints-=2.5;
	}

	$q5="No";
	if ($q5=="Yes") {
		$numberPoints-=2.5;
	}else{
		$numberPoints+=2.5;
		$countOfCorrectAnswers++;
	}

	$q6="No";
	if ($q6=="Yes") {
		$numberPoints+=2.5;
		$countOfCorrectAnswers++;
	}else{
		$numberPoints-=2.5;
	}

	if($numberPoints<0){
		$numberPoints=0;
	}else{
		file_put_contents("repo.txt", $numberPoints);
	}

	$endpoint = file_get_contents("repo.txt");


	echo "$name <br>
	Correct answers :$countOfCorrectAnswers/6<br>
	Number of points:$numberPoints<br>
	";
	if ($endpoint/$numberPoints<$numberPoints) {
		echo "Goog result";
	}else{
		echo "Not best result";
	}
?>