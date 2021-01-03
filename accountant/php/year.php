<?php
	
	for ($i = 1950; $i < 2006; $i++) {
		if($i == 1950)
		{

			echo "<option value='0' disabled selected>Year</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
	}
?>