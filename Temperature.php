<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title>Temperature Conversion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>
	<header>
		<h1>Temperature Converter</h1>
		<div class="Main">
			<div class="left">
				<img src="images/3706176.svg">
			</div>
			<div class="right">
				<form method="POST">
					<input type="text" name="number" placeholder="Enter Your Number" class="num">
					<div class="Select">
						<label>Celsius</label>
						<input type="radio" name="unit" value="cel">

						<label>Fahrenheit</label>
						<input type="radio" name="unit" value="fah">
					</div>
					<input type="submit" name="submit" value="Convert Now" class="btn">
				</form>
				<div>
					<p>
						<?php

						if (isset($_POST['submit'])) {
							$numberg = $_POST['number'];
							$temp = $_POST['unit'];

							if ($temp == "cel") {
								$result = $numberg * 9 / 5 +32;
								echo "The Conversion value of Celsius is " . $result;
							}
							elseif (($temp == "fah")) {
							 	# code...
							 	$result = ($numberg - 32) * 5 / 9;
							 	echo "The Conversion value of Fahrenheit is " . $result;
							 }
							 else {
							 	echo "Enter Some Value To Get The Results";
							 } 

						}
						?>
					</p>
				</div>
			</div>
		</div>
	</header>
	</section>

</body>
</html>