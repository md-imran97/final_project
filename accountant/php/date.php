<?php 
	for ($i=0; $i <32 ; $i++) { 
		# code...
		if ($i==0) {
			# code...
			echo "<option value='0' disabled selected>Date</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
	}
 ?>