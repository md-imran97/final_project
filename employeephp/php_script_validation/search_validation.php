<?php
	$typeArr = array("Search","Doctors Name","Available Doctors","Cabin Capacity","Doctors Payment","Any Specialist","Available Doctors Now");

	
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