<?php
	// if(isset($_GET['uSearch'])) {
	// 	echo $_GET['uSearch'];
	// 	exit();
	// }

	$conn=mysqli_connect('localhost','root','','als');

	$s= $_GET['uSearch'];

	if($s) {
		$sql= "SELECT * FROM `users` WHERE `name` LIKE '%$s%'";
		if( $data= mysqli_query($conn,$sql) ) {
			$i=1;
	    while($row=mysqli_fetch_assoc($data)) {
	            echo "<tr>
	            		<td>$i</td>
	            		<td>$row[name]</td>
	            		<td>$row[email]</td>
	            		<td>$row[designation]</td>
	            	 </tr>";$i++;
	        }
	    }
		else {
		    echo mysql_error();
		}
	}
	else if($s==NULL) {
		$data= "";
	}
	
?>