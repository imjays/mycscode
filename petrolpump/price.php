<?php 
    $ServerName = "localhost:3306";
    $UserName = "mycscode_loginadmin";
    $PassWord = "Manish@123654";
    $DataBase = "mycscode_petrolpump";

	$FuelType = $_POST["type"];
	$Quantity = $_POST["quantity"];
	$Price = $_POST["price"];
	$Date = $_POST["date"];
    
   $con = new mysqli($Server,$UserName,$PassWord,$DataBase);
   
   if($con->connect_error){
       die("Connection Failed to Database: " .$con->connect_error);
   }
   
	$sql ="INSERT INTO fuelprice (FuelType,Quantity,Price,Date) VALUES('$FuelType', '$Quantity', '$Price', '$Date')";
	
	if(!mysqli_query($con,$sql))
	{
	echo 'Not Inserted, Inconvinence is deeply regretted';
	}
	else
	{
	echo '<center><h2 style="color: dodgerblue">Price and Quantity saved successfully.</h2></center>';
	echo '<center><h2 style="color: dodgerblue">Redirecting to PetrolPump Inventory.</h2></center>';
	}
	$con->close();
	header("refresh:2; url=/petrolpump/inventory");
	
?>
