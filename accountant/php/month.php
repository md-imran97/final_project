<?php
	$monthArr= array("Month","January","February","March","April","May","June","July","August","September","October","November","December");
	for ($i=0; $i <count($monthArr) ; $i++) { 
	 	# code...
	 	if ($i==0) {
	 		# code...

	 		echo "<option value='0' disabled selected>$monthArr[$i]</option>";
	 	}
	 	else{
	 		echo "<option value='$monthArr[$i]''>$monthArr[$i]</option>";
	 	}
	 } 
 ?>
