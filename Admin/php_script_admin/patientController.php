<?php 
	require_once '../model/db_connect.php';
	
	$text = $_GET["id"];
	$query="select * from patients where id like '%$text%'";
	$result = get($query);
	if(count($result)>0)
	{
		/* for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]["name"]."<br>";
			$id=$result[$i]["id"];
			$name=$result[$i]["name"];
			//$link='<a href="book.php?id="'.$id;
			//echo $link;
			//echo  '<a href="book.php?id="'.$id.'>'.$result[$i]["name"].'<br>'.'</a>';
			//echo '<a'.' href="book.php?id=$id">'.$result[$i]["name"].'<br></a>';
			echo "<a href='book.php?id=$id'>$name</a>"."<br>";
		} */
	}
	else 
	{
		//echo "ssssssssssssssssssss";
	}
	echo "<br>";
	echo
	"
		<table border='1'>
					<td>Serial No</td>
					<td>Name</td>
					<td>ID</td>
					<td>Age</td>
					<td>Phone</td>
					<td>Admission Date</td>
					<td>Release Date</td>
					<td>Doctor ID</td>
					<td>Bed ID</td>
			
		
	";
	if(count($result)>0)
	{
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]["name"]."<br>";
			$id=$result[$i]["id"];
			$name=$result[$i]["name"];
			$age=$result[$i]["age"];
			$phone=$result[$i]["phone"];
			
			/* $stat="";
			if($status==0){$stat="Pending";}
			else{$stat="Approved";} */
			$admissionDate=$result[$i]["admissionDate"];
			$releaseDate=$result[$i]["releaseDate"];
			$doctorId=$result[$i]["consultantId"];
			$bedId=$result[$i]["bedId"];
			
			$serial=$i+1;
			echo 
			"<tr>
				<td>$serial</td>
				<td>$name</td>
				<td>$id</td>
				<td>$age</td>
				<td>$phone</td>
				
			
			";
			
			echo "<td>$admissionDate</td>";
			echo "<td>$releaseDate</td>";
			echo "<td>$doctorId</td>";
			echo "<td>$bedId</td>";
			echo "</tr>";
		}
	}
	//else{echo "";}
	echo "</table>";
	
?>