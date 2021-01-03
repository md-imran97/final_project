<?php
	$typeArr = array("Select Type","admin","doctor","accountant","pharmacy salesman","employee");

	
	for($i=0;$i<count($typeArr);$i++)
	{
		if($i == 0)
			{

				echo "<option value='' disabled selected>$typeArr[$i]</option>";
			}
			else
			{
				echo "<option value='$typeArr[$i]'>$typeArr[$i]</option>";
			}
	}
?>