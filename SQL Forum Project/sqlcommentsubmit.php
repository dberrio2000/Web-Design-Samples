<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="UTF-8">
        <title>Submit Page</title>
        <link rel="stylesheet" href="formpage.css" />

<h1>Comments</h1>
 <hr/>       
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $username = "dberrio";
    $password = "ephowhee";
    
    $connection = mysqli_connect("helios.vse.gmu.edu", "dberrio", "ephowhee", "dberrio") or die ("No connection detected.");
    
 
       
    $user_data = "INSERT INTO user_info
                 (user_email, user_name, user_comment)
                 VALUES ('$email', '$name', '$comment')";
    
        
    if (mysqli_query($connection, $user_data)){
            echo "Comment successfully posted";
            echo "<br/>";
            echo "<hr/>";
            $fetch = "SELECT * FROM user_info";
            $result = mysqli_query($connection, $fetch);
            while ($row = mysqli_fetch_assoc($result)){
                foreach ($row as $post => $comment ) {
                echo $comment."<br/>";
            }
            echo "<hr/>";
            
        }
        
        echo "<a href='sqlcommentpagedescendingmenu.php'>Order by descending.</a><br/>";
            echo "<a href='sqlcommentpagemenu.php'>Order by ascending.</a><br/>";
            echo "<a href='sqlcommentformmenu.php'>Comment Page.</a>";
    
    } else {
        echo "Comment was not posted. Either you are trying to make another post as the same user,
        or there was a connection error.<br/>";
        echo "Are you someone else? Go back to the <a href='sqlcommentformmenu.php'>Comment Page.</a> to leave a comment!";
    }
    
    mysqli_close($connection);
    
    ?>
        </html>