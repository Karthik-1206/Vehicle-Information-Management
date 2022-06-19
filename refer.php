<!Doctype html>
<head>
<title> Vehicles Info </title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />

<style>
table,tr,th,td
{
	border:1px solid black;
	border-collapse:collapse;
	padding:6px;
	text-align:center;;
	
}

</style>
</head>
<body>
<div id="topbar">
</div>
<div id="content">
<div id="header">
<img src="images/logo.png" />
<hr size="10" width="100%" color="black">  
<?php
include_once 'new user.php';
$result = mysqli_query($con,"SELECT * FROM nu");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<h1> VEHICLE DETAILS </h1>
<table>
<tr>
    <th>VehicleNo</th>
    <th>OwnerName</th>
    <th>Address</th>
    <th>Number</th>
	<th>VehicleName</th>
	<th>VehicleType</th>
	<th>FuelType</th>
	<th>Color</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
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

</div>
</div>



</body>
</html>