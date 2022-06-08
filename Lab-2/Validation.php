<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $dateOfBirth1Err = $genderErr = $degreeErr= $bloodGroupErr = "";
$name = $email = $dateOfBirth1 = $gender = $degree= $bloodGroup = $DayOfBirth = $MonthOfBirth = $YearOfBirth = $DateOfBirth1 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["DayOfBirth"]) || empty($_POST["MonthOfBirth"]) || empty($_POST["YearOfBirth"])) {
    $dateOfBirth1Err = "Date Of Birth is required";
  } else {
    $DayOfBirth = $_POST["DayOfBirth"];
    $MonthOfBirth = $_POST["MonthOfBirth"];
    $YearOfBirth = $_POST["YearOfBirth"];
    $dateOfBirth1 = $DayOfBirth."/".$MonthOfBirth."/".$YearOfBirth;
  }



  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = $_POST["degree"];
  }


  

  if (empty($_POST["bloodGroup"])) {
    $bloodGroupErr = "bloodGroup is required";
  } else {
    $bloodGroup = $_POST["bloodGroup"];
  }

  
}
  


?>

<h2>Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: 
  <br>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: 
  <br>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth: 
  <br>
  <table>
    <tr>
      <td>
        Day
      </td>
      <td>
        Month
      </td>
      <td>
        Year
      </td>
    </tr>
    <tr>
    <td>
    <select name="DayOfBirth">
    <option value="" default>Select</option>
    <?php
    for($i=1;$i<=31;$i++){
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select> 
      </td>
      <td>
    <select name="MonthOfBirth">
    <option value="" default>Select</option>
    <?php
    for($i=1;$i<=12;$i++){
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select> 
      </td>
      <td>
    <select name="YearOfBirth">
    <option value="" default>Select</option>
    <?php
    for($i=1953;$i<=1998;$i++){
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select> 
      </td>
      <td>
        <span class="error">* <?php echo $dateOfBirth1Err;?></span>
      </td>
    </tr>
  </table>
  <br>
  Gender:
  <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <br>
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">SSC
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">HSC
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="BSc") echo "checked";?> value="BSc">BSc
  <input type="radio" name="degree" <?php if (isset($degree) && $degree=="MSc") echo "checked";?> value="MSc">MSc  
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

  Blood Group: 
  <br>
  <select name="bloodGroup">
    <option value="" default>Select</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select> 
  <span class="error">* <?php echo $bloodGroupErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit"> 
  
</form>

<?php
echo "<h2>My Input</h2>";
echo $name;
echo "<br><br>";
echo $email;
echo "<br><br>";
echo $dateOfBirth1;
echo "<br><br>";
echo $gender;
echo "<br><br>";
echo $degree;
echo "<br><br>";
echo $bloodGroup;
?>

</body>
</html>