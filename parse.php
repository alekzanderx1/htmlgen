<?php
	$title=$_POST['name'];
	$desc=$_POST['desc'];
	$date=$_POST['date'];
	$coordinator=$_POST['coord'];
	$myfile = fopen("output.txt", "w") or die("Unable to open file!");
	$txt = '<!DOCTYPE html>
			<html>
			<head>
			<meta charset="ISO-8859-1">
			<title>$title</title>
			<style>
			body {
				background-image: url("https://raw.githubusercontent.com/skrish-n/googleit/master/back2.jpeg");
				background-repeat: repeat;
			}
			</style>
			</head>
			<body>
			<h1><b><i><u>'.$title.'</u></b></i></h1>
			<br />
			<br />

			<h3>
			<pre>
			'.$desc.'
			</pre>
			</h3>
			<footer>
			<br/><br/>
			<p>Tentative Event date:<b>.' $date.'</b></p>
			<p><i>Hosted by:</i>'. $coordinator.'</p>
			</footer>
			</body>
			</html>';
	fwrite($myfile, $txt);
	fclose($myfile);
?>