<html>
<head>
 	<title> Search Data by its ID</title>
 	<style>
 	body{
 		background-color: grey;
 	}
 table,th,td{
 	border: 2px solid black;
 	width: 1100px;
 	background-color: loghtgreen;
 }
 .btn{
 	width: 10%;
 	height: 5%;
 	font-size: 22px;
 	padding: 8px;
 }
 </style>
</head>
<body>
	<center>
	<h1> Search for a single Data/ Record from DataBase PHP</h1>
	<h2> Retrieve / search/ fetch/ data from database </h2>
	<div class= "container">
		<from action= "" method= "POST">
			<input type= "text" name= "VehicleNo" class="btn" placeholder= "Enter VehicleNo" />
			<input type= "submit" name= "search" class="btn" value= SEARCH BY VEHICLENO">
			</form>
			<table>
				<tr>
				    <th>VehicleNo</th>
				    <th>OwnerName</th>
				    <th>Address</th>
				    <th>Number</th>
				    <th>VehicleName</th>
				    <td>VehicleType</th>
				    <td>FuelType</th>
					<td>Color</th>
					
					
				</tr> <br>
			<?php
			$connection=mysqli_connect("localhost","root","");
			$db=mysqli_select_db($connection, "vehicle");
			if(isset($_POST['search']))
			{
				$vn=$_POST['VehicleNo'];
				
				$query= "SELECT * FROM 'employee' where VehicleNo= '$vn'";
				$query_run= mysqli_fetch_array($query_run)
				{
					<tr>
						<td> <?php echo $row['VehicleNo']; ?> </td>
						<td> <?php echo $row['OwnerName']; ?> </td>
						<td> <?php echo $row['Address']; ?> </td>
						<td> <?php echo $row['Number']; ?> </td>
						<td> <?php echo $row['VehicleName']; ?> </td>
						<td> <?php echo $row['VehicleType']; ?> </td>
						<td> <?php echo $row['FuelType']; ?> </td>
						<td> <?php echo $row['Color']; ?> </td>
						
						
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>
	</center>
</body>
</html>