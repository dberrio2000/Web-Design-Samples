<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Create New Contact</title>
        <link rel="stylesheet" href="contacts.css"/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php
            $fnameerror = $lnameerror = $emailerror = $phoneerror = $addresserror = "";
$cityerror = $stateerror = $ziperror = "";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $valid = true;
   if (empty($_POST["fname"])) {
    $fnameerror = "First name is required";
    $valid = false;
  } else {
    $fname = test_input($_POST["fname"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["lname"])) {
    $lnameerror = "Last name is required";
    $valid = false;
  } else {
    $lname = test_input($_POST["lname"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["email"])) {
    $emailerror = "Email is required";
    $valid = false;
  } else {
    $email = test_input($_POST["email"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["phone"])) {
    $phoneerror = "Phone number is required";
    $valid = false;
  } else {
    $phone = test_input($_POST["phone"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["address"])) {
    $addresserror = "Address is required";
    $valid = false;
  } else {
    $address = test_input($_POST["address"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["city"])) {
    $cityerror = "City is required";
    $valid = false;
  } else {
    $city = test_input($_POST["city"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["state"])) {
    $stateerror = "State is required";
    $valid = false;
  } else {
    $state = test_input($_POST["state"]);
  }
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
   if (empty($_POST["zip"])) {
    $ziperror = "Zip is required";
    $valid = false;
  } else {
    $zip = test_input($_POST["zip"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        ?>
        <div>
            <h1>Create New Contact</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method ="post">
                <p>First Name: 
                    <input type="text" id="fname" name="fname"/>
                    <span class="error">* <?php echo $fnameerror;?></span></p>
                <p>Last Name: 
                    <input type="text" id="lname" name="lname"/>
                <span class="error">* <?php echo $lnameerror;?></span></p>
                <p>Email: 
                    <input type="text" id="email" name="email"/>
                <span class="error">* <?php echo $emailerror;?></span></p>
                <p>Phone Number: 
                    <input type="text" id="phone" name="phone"/>
                <span class="error">* <?php echo $phoneerror;?></span></p>
                <p>Address:
                    <input type="text" id="address" name ="address"/>
                    <span class="error">* <?php echo $addresserror;?></span>
                   City: 
                    <input type="text" id ="city" name ="city"/>
                    <span class="error">* <?php echo $cityerror;?></span></p>
                <p>State: 
                    <select  id="state" name="state">
                        <option value = "" >Select a State</option>
                        <option value ="AL">Alabama</option>
                        <option value ="AK">Alaska</option>
                        <option value ="AZ">Arizona</option>
                        <option value ="AR">Arkansas</option>
                        <option value ="CA">California</option>
                        <option value ="CO">Colorado</option>
                        <option value ="CT">Connecticut</option>
                        <option value ="DE">Delaware</option>
                        <option value ="DC">District of Columbia</option>
                        <option value ="FL">Florida</option>
                        <option value ="GA">Georgia</option>
                        <option value ="HI">Hawaii</option>
                        <option value ="ID">Idaho</option>
                        <option value ="IL">Illinois</option>
                        <option value ="IN">Indiana</option>
                        <option value ="IA">Iowa</option>
                        <option value ="KS">Kansas</option>
                        <option value ="KY">Kentucky</option>
                        <option value ="LA">Louisiana</option>
                        <option value ="ME">Maine</option>
                        <option value ="MD">Maryland</option>
                        <option value ="MA">Massachusetts</option>
                        <option value ="MI">Michigan</option>
                        <option value ="MN">Minnesota</option>
                        <option value ="MS">Mississippi</option>
                        <option value ="MO">Missouri</option>
                        <option value ="MT">Montana</option>
                        <option value ="NE">Nebraska</option>
                        <option value ="NV">Nevada</option>
                        <option value ="NH">New Hampshire</option>
                        <option value ="NJ">New Jersey</option>
                        <option value ="NM">New Mexico</option>
                        <option value ="NY">New York</option>
                        <option value ="NC">North Carolina</option>
                        <option value ="ND">North Dakota</option>
                        <option value ="OH">Ohio</option>
                        <option value ="OK">Oklahoma</option>
                        <option value ="OR">Oregon</option>
                        <option value ="PA">Pennsylvania</option>
                        <option value ="PR">Puerto Rico</option>
                        <option value ="RI">Rhode Island</option>
                        <option value ="SC">South Carolina</option>
                        <option value ="SD">South Dakota</option>
                        <option value ="TN">Tennessee</option>
                        <option value ="TX">Texas</option>
                        <option value ="UT">Utah</option>
                        <option value ="VT">Vermont</option>
                        <option value ="VA">Virginia</option>
                        <option value ="WA">Washington</option>
                        <option value ="WV">West Virginia</option>
                        <option value ="WI">Wisconsin</option>
                        <option value ="WY">Wyoming</option>
                        <span class="error">* <?php echo $stateerror;?></span>
                    </select>
                   Zip: 
                   <input type="text" id="zip" name="zip"/>
                    <span class="error">* <?php echo $ziperror;?></span></p>
                   <input type="submit" value="Submit"/>
            </form>
            <hr/>
            <?php 
   
            
            
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
            
 
    
    $contact = array("$fname, ", "$lname, ", "$email, ", "$phone, ", "$address, ", "$city, ", "$state, ", "$zip", "\n",);    
 if(file_exists("records.txt")){
    $records = fopen("records.txt", "w+");
    if ($valid){
        foreach ($contact as $entry){
            fwrite($records, $entry);
        }
        echo "Contact saved/updated successfully!";
        }else{
        echo 'Error: Please provide information for each field.';
    }
    
    fclose($records);
 }else{
     echo "File not found! Please return to the Directory and try again.";
      
     
 }
    
   
            ?>
        </div>
        <hr/>
        <a href="Directory.php">Back to Directory</a>
    </body>
</html>
