<html>
 <head>
 </head>
 <body>
 	<?php
		$input = fopen("eventInfo.txt", "r") or die("Unable to open file!");
		// Output one line until end-of-file
			//while(!feof($input)) {
				eventName =  fgets($input);
				eventTime =  fgets($input);
				eventLocation =  fgets($input);
		}
		fclose($myfile);
	?>
 </body>
</html>