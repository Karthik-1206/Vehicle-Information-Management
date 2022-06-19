<?php
$con = new mysqli("localhost","root","","vehicle");
if(!$con){
	die("not connect".mysqli_error());
}
else{
	if(isset($_POST["Submit"]))
	{
		$vn = mysqli_real_escape_string($con,$_POST['VehicleNo']);
		$on = mysqli_real_escape_string($con,$_POST['OwnerName']);
		$a = mysqli_real_escape_string($con,$_POST['Address']);
		$n = mysqli_real_escape_string($con,$_POST['Number']);
		$vt = mysqli_real_escape_string($con,$_POST['VehicleType']);
		$v = mysqli_real_escape_string($con,$_POST['VehicleName']);
		$ft = mysqli_real_escape_string($con,$_POST['FuelType']);
		$c = mysqli_real_escape_string($con,$_POST['Color']);
		$sql = "INSERT INTO nu(VehicleNo,OwnerName, Address,Number,VehicleType,VehicleName,FuelType,Color) VALUES ('$vn','$on','$a','$n','$vt','$v','$ft','$c')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			echo "NOT REGISTERED.......";
		}
		else{
			echo "REGISTERED SUCCESSFULLY.......";
		}
        mysqli_close($con);	
	
	}
}


?>