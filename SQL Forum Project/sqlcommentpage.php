<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="UTF-8">
        <title>Comments</title>
        <link rel="stylesheet" href="formpage.css" />
        
<h1>Comments</h1>
<hr/>
<?php
     $connection = mysqli_connect("helios.vse.gmu.edu", "dberrio", "ephowhee", "dberrio") or die ("No connection detected.");
    
     $drop = "ALTER TABLE user_info DROP COLUMN comment_num";
     $add = "ALTER TABLE user_info ADD COLUMN comment_num int AUTO_INCREMENT PRIMARY KEY NOT NULL FIRST;";
     $reindex_drop = mysqli_query($connection, $drop);
     $reindex_add = mysqli_query($connection, $add);
     
     
     $fetch = "SELECT * FROM user_info";
     $result = mysqli_query($connection, $fetch);
     while ($row = mysqli_fetch_assoc($result)){
          
         foreach ($row as $post => $comment ) {
             echo $comment."<br/>";
         }
         echo "<hr/>";
         
        
     }
      echo "Delete a comment.<br/>(Type a comment number in the field)<br/><br/>";
           echo "<form action = 'sqlcommentdeletemenu.php' method = 'post'>"
           . "<input type = 'text' id = 'delete' name= 'delete' />
               <input type = 'submit' value = 'Delete Comment' />
               </form>";
           echo "<a href='sqlcommentpagedescendingmenu.php'>Order by descending.</a><br/>";
           echo "<a href='sqlcommentpagemenu.php'>Order by ascending.</a><br/>";
           echo "<a href='sqlcommentformmenu.php'>Comment Page.</a>";
     mysqli_close($connection);
?>

</html>