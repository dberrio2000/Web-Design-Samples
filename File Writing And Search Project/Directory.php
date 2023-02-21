<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Directory</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="contacts.css"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    </head>
    <body>
       
            <h1>Online Contacts Directory</h1>
            <h2>Search for a Contact</h2>
            <form action ="contacts.php" method="post"/>
                <p>First Name: 
                    <input type="text" id="fname" name="fname"/> *</p>
                <p>Last Name: 
                    <input type ="text" id="lname" name="lname"/> *</p>
                <input type ="submit" value ="Search"/>
                <hr/>
                <a href="contactpage.php">Add New Contact Entry</a>
    </body>
</html>
