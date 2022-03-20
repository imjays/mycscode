<?php 
$title= "PetrolPump Admin";
include "header.php";   // Include the header
?>

<div class=form-container><div id="login-form">
    <a href="/petrolpump/user"style="float:right;color:red;">User Portal</a><br>
<center><h2>Admin Login</h2></center>
<form name="smsform" action="dashboard" onsubmit="return validation()" method="POST">
<label> Email ID: </label>
<input type="text" id="username" name="email" placeholder="Registered Email ID"/>
<br>
<br>
<label> Password: &nbsp;</label>
<input type="password" id="password" name="password" placeholder="Enter your Password"/>
<br>
<input type="checkbox" onclick="showpassword()">
  <label for="Show Password">Show Password</label><br>
<br>
<br>
<center>
<input type="submit" id="btn" value="Login" />
 
</center>

</form>
</div>
</div>   
<script>
function showpassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php
include "footer.php";                 // Include the footer
?>