<?php 
	require '../model/db_connect.php';
	
	$text = $_GET["name"];
	$query=$query="SELECT users.*, doctors.specialization as sp, doctors.chamberTime as ct, doctors.roundTime as rt, doctors.operationTime as ot  FROM users
		INNER JOIN doctors ON users.id=doctors.id where users.lastName like '%$text%'";
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
					<td>Type</td>
					<td>Email</td>
					<td>Status</td>
					<td>Specialization</td>
					<td>Chamber Time</td>
					<td>Rounding Time</td>
					<td>Operation Time</td>
			
		
	";
	if(count($result)>0)
	{
		for($i=0;$i<count($result);$i++)
		{
			//echo $result[$i]["name"]."<br>";
			$id=$result[$i]["id"];
			$lastName=$result[$i]["lastName"];
			$userType=$result[$i]["userType"];
			$email=$result[$i]["email"];
			$status=(int)$result[$i]["status"];
			$stat="";
			if($status==0){$stat="Pending";}
			else{$stat="Approved";}
			$specialization=$result[$i]["sp"];
			$chamberTime=$result[$i]["ct"];
			$roundTime=$result[$i]["rt"];
			$operationTime=$result[$i]["ot"];
			//$editLink="<a href='edit.php?id=$id'>Edit</a>";
			//$deleteLink="<a href='delete.php?id=$id'>Delete</a>";
			//$approvalLink="<a href='approve.php?id=$id'>Approve</a>";
			
			$serial=$i+1;
			echo 
			"<tr>
				<td>$serial</td>
				<td>$lastName</td>
				<td>$id</td>
				<td>$userType</td>
				<td>$email</td>
				
			
			";
			if($status==0)
			{
				echo "<td style='color:red'>$stat"."</td>";
				//echo "<td >$approvalLink"."</td>";
			}
			else
			{
				echo "<td style='color:green'>$stat"."</td>";
				//echo "<td >Done"."</td>";
			}
			echo "<td>$specialization</td>";
			echo "<td>$chamberTime</td>";
			echo "<td>$roundTime</td>";
			echo "<td>$operationTime</td>";
			echo "</tr>";
		}
	}
	//else{echo "";}
	echo "</table>";
	
?>