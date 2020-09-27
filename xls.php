<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Raporo.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Amazina Yombi</th>
						<th>Indangamuntu</th>
						<th>Telefoni</th>
						<th>Iteraniro</th>
						<th>Akarere</th>
						<th>Umurenge</th>
						<th>Akagari</th>
						<th>Umudugudu</th>
						<th>Italiki</th>
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
						<td>".$fetch['dis']."</td>
						<td>".$fetch['sec']."</td>
						<td>".$fetch['cell']."</td>
						<td>".$fetch['vill']."</td>
						<td>".$fetch['dates']."</td>
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