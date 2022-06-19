<?php
$con = mysqli_connect("localhost","root","","vehicle");
if(isset($_GET['VehicleNo']))
{
	$VehicleNo = $_GET['VehicleNo'];
	$query = "SELECT * FROM nu WHERE id='$VehicleNo' ";
	$query_run = mysqli_query($con, $query);
	if(mysqli_num_rows($query_run) > 0)
	{
		foreach($query_run as $row)
		{
			?>
			<tr>
			<td><?php echo $row['VehicleNo']; ?></td>
			<td><?php echo $row['OwnerName']; ?></td>
            <td><?php echo $row['Address']; ?></td>
            <td><?php echo $row['Number']; ?></td>
	        <td><?php echo $row['VehicleName']; ?></td>
	        <td><?php echo $row['VehicleType']; ?></td>
	        <td><?php echo $row['FuelType']; ?></td>
	        <td><?php echo $row['Color']; ?></td>
			</tr>
			<?php
		}
	}
    else
	{
		echo "No Record Found";
	}
}
?>
