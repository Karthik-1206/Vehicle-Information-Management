<?php
$con = new mysqli("localhost","root","","vehicle");
if(!$con){
	die("not connect".mysqli_error());
}
else{
	if (isset($_GET['id'])) 
	{
		$id = $_GET['id'];
		$query1 = mysql_query("select * from employee where employee_id=$id", $connection);
		while ($row1 = mysql_fetch_array($query1))
		{
			<span>Name:</span> <?php echo $row1['employee_name']; ?>
			<span>E-mail:</span> <?php echo $row1['employee_email']; ?>
			<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
			<span>Address:</span> <?php echo $row1['employee_address']; ?>
		}
	}
	mysqli_close($con);
}
	


?>