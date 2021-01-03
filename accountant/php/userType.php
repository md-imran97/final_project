<?php
	$userTypeArr= array("Type","Doctor","Employee","Nurse","Salesman");
	for ($i=0; $i <count($userTypeArr) ; $i++) { 
	 	# code...
	 	if ($i==0) {
	 		# code...

	 		echo "<option value='0' disabled selected>$userTypeArr[$i]</option>";
	 	}
	 	else{
	 		echo "<option value='$userTypeArr[$i]''>$userTypeArr[$i]</option>";
	 	}
	 } 
 ?>