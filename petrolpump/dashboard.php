<?php
$title= "Dashboard";
$slogan ="PetrolPump Admin";
include "header.php";   // Include the header
?>

<?php 

    $ServerName = "localhost:3306";
    $UserName = "mycscode_loginadmin";
    $PassWord = "Manish@123654";
    $DataBase = "mycscode_petrolpump";
    
    $DB_USERNAME = $_POST['email'];  
    $DB_PASSWORD = $_POST['password'];
    
	
    $con = new mysqli($Server,$UserName,$PassWord,$DataBase);
    
    if($con->connect_error){
       die("Connection Failed to Database: " .$con->connect_error);
   }
    //to prevent from mysqli injection  
        $DB_USERNAME = stripcslashes($DB_USERNAME);  
        $DB_PASSWORD = stripcslashes($DB_PASSWORD);  
        $DB_USERNAME = mysqli_real_escape_string($con, $DB_USERNAME);  
        $DB_PASSWORD = mysqli_real_escape_string($con, $DB_PASSWORD);  

    $sql = "select * from adminlogin where Email = '$DB_USERNAME' and Password = '$DB_PASSWORD'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h2 style='color:green;float:right'>Welcome $DB_USERNAME</h2>";
            
        }
        else{  
            echo '<b> <center style="color: red">Login failed. Your credentials did not work.</center></b>';  
            echo "<b><center> Sorry, We cannot verify you. Please enter correct credentials</center></b>";
        } 
?>


<div class=form-container><div id="login-form">
<center><h2>Fuel Price Settings</h2></center>
<form name="smsform" action="price.php" onsubmit="return validation()" method="POST">

<label for="type">Fuel Type</label>
<select id= "fuel_type" name="type" required>
<option value="Fuel Type" title="Fuel">Select Fuel Type</option>
<option value="Petrol" title="Petrol">Petrol</option>
<option value="Diesel" title="Diesel">Diesel</option>
<option value="Kerosene" title="Kerosene">Kerosene</option>
<br>
<label for="quantity" title="Quantity">Quantity</label>
<input type="text" id="quant" name="quantity" placeholder="Quantity" required><br>

<label for="price">Price</label>
<input type="text" name="price" onchange="priceGenerator()" placeholder="Price of Fuel per litter" required><br>

<label> Date: </label>
<input type="date" id="date" name="date" placeholder="Transcation Date" required/>
<br>

<br>
<br>
<center>
<input type="submit" id="btn" value="Submit" />
 
</center>

</form>
</div>
</div> 
