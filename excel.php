<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=download.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
						<th>Job</th>
					</tr>
				<tbody>
		";
		
		$query = $conn->query("SELECT * FROM `christian_info`") or die(mysqli_errno());
		while($fetch = $query->fetch_array()){
			
		$output .= "
					<tr>
						<td>".$fetch['ID']."</td>
						<td>".$fetch['fname']."</td>
						<td>".$fetch['nid']."</td>
						<td>".$fetch['tel']."</td>
						<td>".$fetch['serv']."</td>
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>