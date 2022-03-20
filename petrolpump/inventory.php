<?php
    $ServerName = "localhost:3306";
    $UserName = "mycscode_loginadmin";
    $PassWord = "Manish@123654";
    $DataBase = "mycscode_petrolpump";

    //$DB_USERNAME = $_POST['email'];  
    
	
    $con = new mysqli($Server,$UserName,$PassWord,$DataBase);
    
    if($con->connect_error){
       die("Connection Failed to Database: " .$con->connect_error);
   }
    //to prevent from mysqli injection  
        $DB_USERNAME = stripcslashes($DB_USERNAME);  
        $DB_PASSWORD = stripcslashes($DB_PASSWORD);  
        $DB_USERNAME = mysqli_real_escape_string($con, $DB_USERNAME);  

        $sql = "select * from fuelprice";  
        $results = $con->query($sql);

            if ($results->num_rows > 0) {
                echo "<center><b>Petrol Pump Inventory.</b></center>";
        // output data of row
            echo "<div class=form-container><div id='login-form'>";
            
            echo "<h2 style='color:dodgerblue;'>Quantity and Price of Petroleum Available in Inventory:</h2>";
            echo "<hr>";
            while($row = $results->fetch_assoc()) {
                    
                    echo "<b>Fuel Type: </b>" . $row["FuelType"] ."<br>";
                    echo "<br>";
                    echo "<b>Quantity Available in stock(in liters): </b>".$row['Quantity']."<br>";
                    echo "<br>";
                    echo "<b>Price(in INR): </b>".$row['Price']."<br>";
                    echo "<br>";
                    echo "<b>As per the Date: </b>". $row['Date']."<br>";
                    echo "<br>";
                    echo "<hr>";
                    
                }
                    echo "</div></div>";
                    echo "<br>";
            
        }

    else{
        echo "<br>";
        //echo $DB_USERNAME; testing outputs of this block
        echo "<center><b>Something went wrong! We are looking into it. Meanwhile You can contact admin on support@mycscode.com</b></center>";
    }
?>