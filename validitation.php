<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["pass"].value;
  var b = document.forms["myForm"]["gender"].value;
  
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else if(y == ""){
    alert("Email must be filled out");
    return false;
  }
  else if(z == ""){
    alert("Password must be filled out");
    return false;
  }
  else(b == ""){
    alert("Gender must be filled out");
    return false;
  }
}
</script>
</head>
<body>
<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
  <h2>Registration Form</h2>
  Name: <input type="text" name="fname"><br><br>
   Email: <input type="text" name="email"><br><br>
   Password: <input type="text" name="pass"><br><br>
Select your Gender:
   <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>