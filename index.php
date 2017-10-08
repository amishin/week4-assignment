<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	$date2 = str_replace('-', '/', $date);
	echo "<br> <br> 2. Replace - with / in date: " . $date2;

	$comp = strcmp($date2 , $tar);
	if ($comp > 0)
		echo "<br> 3. date compared to tar: The Future";
	elseif ($comp < 0) 
		echo "<br> 3. date compared to tar: The Past";
	else 
		echo "<br> 3. date compared to tar: Oops";

	$pos = strpos($date2, '/');
	$pos .= " ";
	$pos .= strpos($date2, '/' , 5);
	echo "<br> 4. Position of / in date: " . $pos;

	$words = explode('/', $date2);
	$words_count = count($words);
	echo "<br> 5. Number of words in date: " . $words_count;

	$length = strlen($date2);
	echo "<br> 6. Length of date: " . $length;

	$char = ord($date2[0]);
	echo "<br> 7. ASCII value of the 1st char in date: " . $char;

	$last_char = substr($date2, -2);
	echo "<br> 8. Last 2 chars of date: " . $last_char;

	$arr = explode('/', $date2);
	echo "<br> 9. Date in an Array: ";
	print_r($arr);

	$is_leap_year = false;
	global $r;
	foreach ($year as $r){
		if ($r % 4 == 0) {
			if ($r % 100 == 0){
				if ($r % 400 == 0){
					$is_leap_year = true;
					echo $r . "True";
				}
				else {
					$is_leap_year = false;
					echo $r . "False";
				}
			}
			else {
				$is_leap_year = true;
				echo $r . "True";
			}
		}
		else {
			$is_leap_year = false;
			$r . echo "False";
		}
	}




?>