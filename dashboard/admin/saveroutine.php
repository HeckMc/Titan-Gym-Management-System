<?php
		$rname=$_POST["rname"];
		$day1=$_POST["day1"];
		$day2=$_POST["day2"];
		$day3=$_POST["day3"];
	    $day4=$_POST["day4"];
		$day5=$_POST["day5"];
		$day6=$_POST["day6"];
		
		$fp = fopen("routine_details.txt","a");
		fwrite($fp,$rname);
		fwrite($fp,"|");
		fwrite($fp,$day1);
		fwrite($fp,"|");
		fwrite($fp,$day2);
		fwrite($fp,"|");
		fwrite($fp,$day3);
		fwrite($fp,"|");
		fwrite($fp,$day4);
		fwrite($fp,"|");
		fwrite($fp,$day5);
		fwrite($fp,"|");
		fwrite($fp,$day6);
		fwrite($fp,"#\n");
		fclose($fp);
		echo "<head><script>alert('Routine Added');</script></head></html>";
		echo "<meta http-equiv='refresh' content='0; url=addroutine.php'>";

?>