<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {color: #FF0000;}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <title>Donate</title>
</head>
<body style="font-family : helvetica;">
    <?php
        $cash1 = $hidename = $feedback = $expmonth = $country = $expyear = $cvv = $postal = $cardno = $cash2 = "";
        $cash1Err = $expdateErr = $countryErr = $cvvErr = $postalErr = $cardnoErr = $cash2Err = "";

        if (isset($_POST["submit"])) {
            // donation validation
            if (empty($_POST["cash1"])) {
                $cash1Err = "* Amount is required";
            }
            elseif (is_numeric($_POST["cash1"]) != 1) {
                $cash1Err = "* Please put an amount";
            }
            else {
                $cash1 = test_input($_POST["cash1"]);
            }
            // tip validation
            if (!empty($_POST["cash2"])) {
                if (is_numeric($_POST["cash2"]) != 1) {
                    $cash2Err = "* Please put an amount";
                }
                else {
                    $cash2 = test_input($_POST["cash2"]);
                }
            }
            // card number validation
            if (empty($_POST["cardno"])) {
                $cardnoErr = "* Card number is required";
            }
            elseif (is_numeric($_POST["cardno"]) != 1) {
                $cardnoErr = "* Please put card number";
            }
            elseif (strlen($_POST["cardno"]) != 16) {
                $cardnoErr = "* Must contain 16 digits";
            }
            else {
                $cardno = test_input($_POST["cardno"]);
            }
            // expire date validation
            if (empty($_POST["expmonth"]) || empty($_POST["expyear"])) {
                $expdateErr = "* Expire date is required";
            }
            elseif (is_numeric($_POST["expmonth"]) != 1 || is_numeric($_POST["expyear"]) != 1) {
                $expdateErr = "* Please put a valid date";
            }
            elseif (($_POST["expmonth"]) < 1 || ($_POST["expmonth"]) > 12 || strlen(($_POST["expyear"])) != 4) {
                $expdateErr = "* Please put a valid date";
            }
            else {
                $expmonth = test_input($_POST["expmonth"]);
                $expyear = test_input($_POST["expyear"]);
            }
            // cvv validation
            if (empty($_POST["cvv"])) {
                $cvvErr = "* CVV is required";
            }
            elseif (is_numeric($_POST["cvv"]) != 1) {
                $cvvErr = "* Please put CVV";
            }
            elseif (strlen($_POST["cvv"]) != 3) {
                $cvvErr = "* Must contain 3 digits";
            }
            else {
                $cvv = test_input($_POST["cvv"]);
            }
            // country validation
            if (empty($_POST["country"])) {
                $countryErr = "* Country is required";
            }
            else {
                $country = $_POST["country"];
            }
            // postal code validation
            if (empty($_POST["postal"])) {
                $postalErr = "* Postal code is required";
            }
            elseif (is_numeric($_POST["postal"]) != 1) {
                $postalErr = "* Please put postal code";
            }
            else {
                $postal = test_input($_POST["postal"]);
            }
            // Hide name and feedback
            if (isset($_POST["hidename"])) {
                $hidename = $_POST["hidename"];
            }
            else {
                $_POST["hidename"] = false;
                $hidename = $_POST["hidename"];
            }
            if (isset($_POST["feedback"])) {
                $feedback = $_POST["feedback"];
            }
            else {
                $_POST["feedback"] = false;
                $feedback = $_POST["feedback"];
            }
            // json
            if (file_exists("fund_data.json")) {
                $get_data = file_get_contents("fund_data.json");
                $current_data = json_decode($get_data, true);
                $new_data = array(
                    "Donation"      => $_POST["cash1"],
                    "Tip"           => $_POST["cash2"],
                    "Card number"   => $_POST["cardno"],
                    "Expire month"  => $_POST["expmonth"],
                    "Expire year"   => $_POST["expyear"],
                    "CVV"           => $_POST["cvv"],
                    "Country"       => $_POST["country"],
                    "Postal code"   => $_POST["postal"],
                    "Hide name"     => $_POST["hidename"],
                    "Feedback"      => $_POST["feedback"],
                );
                $current_data[] = $new_data;
                $final_data = json_encode($current_data);
                file_put_contents("fund_data.json", $final_data);
            }
            else {
                echo "Fatal Error!";
            }
        }
        // trim and strip
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h1 style="text-align: center;">Donate to victims ♡</h1>
    <div style="margin:75px; border-radius: 5px; background-color: #f2f2f2; padding: 30px;">
    <p><b><i>You are supporting Bangladesh fire relief fund ♡</i></b></p>
    <form action="" method="post">
        <p><b>Enter your donation:</b></p>
        $ <input type="number" style="font-size : 25px; width : 250px; height : 35px" name="cash1" value="<?php echo $cash1;?>">
        <span class="error"><?php echo $cash1Err;?></span>
        <br><br>
        <p><b>Tip Fire Risk Management Services:</b></p>
        <p>Our organization has a 0% profit on funds. We will continue offering its services thanks to donors who will leave an optional amount here:<p>
        $ <input type="number" style="font-size : 20px; width : 200px; height : 25px" name="cash2" value="<?php echo $cash2;?>">
        <span class="error"><?php echo $cash2Err;?></span>
        <p><b>Payemnt Method:</b></p>
        <input type="radio" name="payment" <?php echo "checked";?> value=""> Credit or debit card
        <br><br>
        <input type="number" placeholder="Card number" name="cardno" value="<?php echo $cardno;?>">
        <span class="error"><?php echo $cardnoErr;?></span>
        <br><br>
        <input type="number" placeholder="MM" style="width : 78px" name="expmonth" value="<?php echo $expmonth;?>">
        <input type="number" placeholder="YY" style="width : 79px" name="expyear" value="<?php echo $expyear;?>">
        <span class="error"><?php echo $expdateErr;?></span>
        <br><br>
        <input type="number" placeholder="CVV" name="cvv" value="<?php echo $cvv;?>">
        <span class="error"><?php echo $cvvErr;?></span>
        <br><br>
        <?php include "countries.php";?>
        <span class="error"><?php echo $countryErr;?></span>
        <br><br>
        <input type="number" placeholder="Postal code" name="postal" value="<?php echo $postal;?>">
        <span class="error"><?php echo $postalErr;?></span>
        <p><b>Additional options:</b></p>
        <input type="checkbox" name="hidename" id="" value="true"> Don't display my name publicly on the campaign
        <br>
        <input type="checkbox" name="feedback" id="" value="true"> Get occasional updates via email
        <br><br>
        <input type="submit" style="color : green;" name="submit" value="Donate"> Secure donation
        <br><br>
        <p>By continuing, you agree with our terms and privacy policy</p>
    </form>
    <div>
</body>
</html>