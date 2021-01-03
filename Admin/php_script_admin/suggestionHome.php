<?php 
	require_once '../model/db_connect.php';
	
	$text = $_GET["id"];
	$query="select * from users where id like '%$text%'";
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
					<td>Approval</td>
					<td>Delete</td>
					<td>Edit</td>
			
		
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
			$editLink="<a href='edit.php?id=$id'>Edit</a>";
			$deleteLink="<a href='delete.php?id=$id'>Delete</a>";
			$approvalLink="<a href='approve.php?id=$id'>Approve</a>";
			
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
				echo "<td >$approvalLink"."</td>";
			}
			else
			{
				echo "<td style='color:green'>$stat"."</td>";
				echo "<td >Done"."</td>";
			}
			echo "<td>$deleteLink</td>";
			echo "<td>$editLink</td>";
			echo "</tr>";
		}
	}
	//else{echo "";}
	echo "</table>";
	
?>