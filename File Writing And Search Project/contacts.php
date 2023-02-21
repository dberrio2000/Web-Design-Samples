<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<body>
    <head>
        <title>Edit Contact</title>
        <link rel="stylesheet" href="contacts.css"/>
    </head>
    
    <div>
        <div><h1>Edit Contact</h1></div>
        <div>
        <?php
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            
      if(file_exists("records.txt")){
            $records = fopen("records.txt", "r");
            $entry = file("records.txt");
            for ($i=0; $i < count($entry); $i++){
                $record = explode(", ", $entry[$i]);
                $val1 = strcasecmp ($fname, $record[0]);
                $val2 = strcasecmp($lname, $record[1]);
                if ($val1 == 0 && $val2 == 0){
                echo "There's a match!";
                echo "<form action='contactpage.php' method ='post'>
                <p>First Name: 
                    <input type='text' id='fname' name='fname' value ='$record[0]'/>
                    <span class='error'>*
                <p>Last Name: 
                    <input type='text' id='lname' name='lname' value ='$record[1]'/>
                <span class='error'>* 
                <p>Email: 
                    <input type='text' id='email' name='email' value ='$record[2]'/>
                <span class='error'>* 
                <p>Phone Number: 
                    <input type='text' id='phone' name='phone' value ='$record[3]'/>
                <span class='error'>*
                <p>Address:
                    <input type='text' id='address' name ='address' value ='$record[4]'/>
                    <span class='error'>* 
                   City: 
                    <input type='text' id ='city' name ='city' value='$record[5]'/>
                    <span class='error'>* 
                <p>State: 
                    <select  id='state' name='state' value ='$record[6]' >
                        <option value = '' >Select a State</option>
                        <option value ='AL'>Alabama</option>
                        <option value ='AK'>Alaska</option>
                        <option value ='AZ'>Arizona</option>
                        <option value ='AR'>Arkansas</option>
                        <option value ='CA'>California</option>
                        <option value ='CO'>Colorado</option>
                        <option value ='CT'>Connecticut</option>
                        <option value ='DE'>Delaware</option>
                        <option value ='DC'>District of Columbia</option>
                        <option value ='FL'>Florida</option>
                        <option value ='GA'>Georgia</option>
                        <option value ='HI'>Hawaii</option>
                        <option value ='ID'>Idaho</option>
                        <option value ='IL'>Illinois</option>
                        <option value ='IN'>Indiana</option>
                        <option value ='IA'>Iowa</option>
                        <option value ='KS'>Kansas</option>
                        <option value ='KY'>Kentucky</option>
                        <option value ='LA'>Louisiana</option>
                        <option value ='ME'>Maine</option>
                        <option value ='MD'>Maryland</option>
                        <option value ='MA'>Massachusetts</option>
                        <option value ='MI'>Michigan</option>
                        <option value ='MN'>Minnesota</option>
                        <option value ='MS'>Mississippi</option>
                        <option value ='MO'>Missouri</option>
                        <option value ='MT'>Montana</option>
                        <option value ='NE'>Nebraska</option>
                        <option value ='NV'>Nevada</option>
                        <option value ='NH'>New Hampshire</option>
                        <option value ='NJ'>New Jersey</option>
                        <option value ='NM'>New Mexico</option>
                        <option value ='NY'>New York</option>
                        <option value ='NC'>North Carolina</option>
                        <option value ='ND'>North Dakota</option>
                        <option value ='OH'>Ohio</option>
                        <option value ='OK'>Oklahoma</option>
                        <option value ='OR'>Oregon</option>
                        <option value ='PA'>Pennsylvania</option>
                        <option value ='PR'>Puerto Rico</option>
                        <option value ='RI'>Rhode Island</option>
                        <option value ='SC'>South Carolina</option>
                        <option value ='SD'>South Dakota</option>
                        <option value ='TN'>Tennessee</option>
                        <option value ='TX'>Texas</option>
                        <option value ='UT'>Utah</option>
                        <option value ='VT'>Vermont</option>
                        <option value ='VA'>Virginia</option>
                        <option value ='WA'>Washington</option>
                        <option value ='WV'>West Virginia</option>
                        <option value ='WI'>Wisconsin</option>
                        <option value ='WY'>Wyoming</option>
                        <span class='error'>* 
                    </select>
                   Zip: 
                   <input type='text' id='zip' name='zip' value='$record[7]'/>
                    <span class='error'>* </p>
                   <input type='submit' value='Submit'/>
            </form>";
                
                echo "<hr/>";
                echo "<a href='Directory.php'>Return to Directory</a>";
                } else {
                echo "No such record exists. Please return to the Directory.";
                echo "<hr/>";
                echo "<a href='Directory.php'>Return to Directory</a>";
            }
            }
            fclose($records);
      } else {
      echo "File not found! Please return to the Directory and try again.";
      echo "<a href='Directory.php'>Return to Directory</a>";
      }
        ?>
        </div>
    
</body>