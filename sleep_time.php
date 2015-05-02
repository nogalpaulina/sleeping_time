<!DOCTYPE html>
<html>
<head>
	<title>Sleeping time!</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper">
		<div class="header">
			<h1>Dreams, dreams...</h1>
		</div>

		<div class="container">

		<?php

			$username = $_POST['yourname'];
			$year_of_birth = $_POST['birthyear'];
			$hours_of_sleep = $_POST['sleephours'];
			
			// FIELD VALIDATIONS //

			if (empty ($username))	{
				print "You must enter your name.";
				print "<br />Please go back and try again.";
				print "<hr style='border: 1px solid #074670' />";
				print "<div id='footer'>All Rights Reserved  ||  NOGAL 2015</div>";
				print "</body></html>";
				exit;
			}

			if (empty($year_of_birth)) {
				print "You must enter the year you were born in.";
				print "<br /> Please go back and try again.";
				print "<hr style='border: 1px solid #074670' />";
				print "<div id='footer'>All Rights Reserved  ||  NOGAL 2015</div>";
				print "</body></html>";
				exit; 
			} 
				elseif (! is_numeric ($year_of_birth)) {
						print "The year must be numeric and four digit long.";
						print "<br /> Please go back and try again.";
						print "<hr style='border: 1px solid #074670' />";
						print "<div id='footer'>All Rights Reserved  ||  NOGAL 2015</div>";
						print "</body></html>";
						exit;
					}
			
			else {
					$length_of_year = strlen($year_of_birth);
					if ($length_of_year != 4) {
						print " The year of your birth must be four digit long.";
						print "<br />Please go back and try again.";
						print "<hr style='border: 1px solid #074670' />";
				print "<div id='footer'>All Rights Reserved  ||  NOGAL 2015</div>";
						print "</body></html>";
						exit;
					}
				}

			if (empty($hours_of_sleep)) {
				print "You must enter the hours you sleep.";
				print "<br /> Please go back and try again.";
				print "<hr style='border: 1px solid #074670' />";
				print "<div id='footer'>All Rights Reserved  ||  NOGAL 2015</div>";
				print "</body></html>";
				exit; 
			} 
				else {
					if (! is_numeric ($hours_of_sleep)) {
						print "The hours must be numeric.";
						print "<br /> Please go back and try again.";
						print "<hr style='border: 1px solid #074670' />";
						print "<div id='footer'>All Rights Reserved  ||  NOGAL 2015</div>";
						print "</body></html>";
						exit;
					}
			}


			$current_year = date('Y');
			$age = $current_year - $year_of_birth;
			$years_of_sleep = ($hours_of_sleep / 24) * $age;

			print "<p>Dear $username, </p>\n";

			print "<p>you were born in $year_of_birth and you are now $age years old.</p>\n";

			print "<p>If you are spending $hours_of_sleep hours per day to sleep, </p>\n";

			print "<p>it means that you have already slept for $years_of_sleep years of your life!</p>\n";
			
			if ($hours_of_sleep > 8 && $hours_of_sleep < 11 ) {
				print "<p><b>You sleep too many hours per day! You could sleep few hours less in night and take a 20 minutes nap during a day instead.</b></p>";
			} elseif ($hours_of_sleep < 8 && $hours_of_sleep >5 ) {
				print "<p><b>You don't spend enough time for sleep. You definatelly should improve it.</b></p>";
			} elseif ($hours_of_sleep == 8){
				print"<p><b>This is perfect amount of sleep for you. Congratulations - you are taking a good care of yourself!</b></p>";
			} else {
				print "<p><b>Well, that's not healthy...</b></p>";
			};

		?>
		</div>
		<hr style="border: 1px solid #074670;" />
		<div id="footer">All Rights Reserved  ||  NOGAL 2015</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>