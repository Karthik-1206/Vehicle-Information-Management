<?php
include_once 'new user.php';
$result = mysqli_query($con,"SELECT * FROM nu");
?>
<!DOCTYPE html>
<html>
<head>
<title> Vehicles Info </title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table border="2",align="center" >
<tr>
    <td>VehicleNo</td>
    <td>OwnerName</td>
    <td>Address</td>
    <td>Number</td>
	<td>VehicleName</td>
	<td>VehicleType</td>
	<td>FuelType</td>
	<td>Color</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<div id="table">
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
</div>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>