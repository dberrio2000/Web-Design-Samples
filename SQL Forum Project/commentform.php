<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="UTF-8">
        <title>Comment Page</title>
        <link rel="stylesheet" href="formpage.css" />
    </head>
    <body>
        <div class ="formpage">
            <h2>New VR Technology</h2>
            
            <p>A new study has developed that details a brand new virtual reality breakthrough.
                A brand new technology has been carefully researched and developed by Remake Reality<br/>
                Inc. that will make haptic feedback in VR more realistic.</p>
            <p>Remake Reality plans to call this technology the "ReGlove". The ReGlove will allow users
                to feel more realistic effects when interacting with objects in VR. The device will be<br/>
                available at select retailers for $169.99 during the 2021 holiday season.</p>
            <hr/>
                
            <h1>Add a Comment</h1>
            
            <form action = "commentsubmit.php" method = "post">
                <p>Name: 
                    <input type="text" id ="name" name="name" required/>  *</p>
                <p>E-mail: 
                    <input type="email" id ="email" name ="email" required/>  *</p>
                <p>Comment: 
                    <textarea id ="comment" name ="comment" required /></textarea>  *</p>
                <hr/>
                <p><strong>* Represents required fields.</strong></p>
                
                <input type="submit" value ="Post Comment"/>
                <input type="reset"  value ="Start Over"/> 
            </form>
            <hr/>
            <a href="commentpagemenu.php">View Comments</a>
            <a href="sqlcommentpagemenu.php">SQL Based Comment Site</a>
          
        </div>
        
    </body>
</html>
