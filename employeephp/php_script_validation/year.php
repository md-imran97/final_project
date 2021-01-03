<?php
	
	for ($i = 1972; $i < 2050; $i++) {
		if($i == 1972)
		{

			echo "<option value='0' disabled selected>Year</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
	}
?>