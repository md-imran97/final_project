<?php
	$typeArr = array("Select Department","All","ENT","Heart","Kedney","Orthopedic","Gynecologist");

	
	for($i=0;$i<count($typeArr);$i++)
	{
		if($i == 0)
			{

				echo "<option value='' disabled selected>$typeArr[$i]</option>";
			}
			else
			{
				echo "<option value='$i'>$typeArr[$i]</option>";
			}
	}
?>