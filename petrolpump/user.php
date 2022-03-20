<?php 
$title= "PetrolPump";
include "header.php";   // Include the header
?>

<div class=form-container><div id="login-form">

<a href="/petrolpump/admin" Style="float:right;color:red;">Admin Login</a>

<center><h2>User Fuel Filling Request</h2></center>

<form name="smsform" action="response.php" onsubmit="return validation()" method="POST">
<label for="name">Name</label>
<input type="text" name="name" placeholder="Name" required>

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

<script type="text/javascript">
    function priceGenerator(){
         let quantity = document.getElementbyId("quant").innerHTML;
         let fuel_type = document.getElementbyId("fuel_type").innerHTML;
         if(fuel_type.value == "petrol"){
             return quantity * 102;
         }
         else if(fuel_type.value == "diesel"){
             return quantity * 90;
         }
         else if(fuel_type.value == "Kerosene"){
             return quantity * 40;
         }
         //console.log(price);
    }
    document.getElementbyId("").innerHTML = priceGenerator();
</script>

<?php

include "footer.php";                 // Include the footer
?>