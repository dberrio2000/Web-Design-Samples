<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>

<head>
    <title>Comment Page</title>
     <link rel="stylesheet" href="formpage.css" />
</head>

<h1>Comments</h1>


<?php
//open file to read and display comments to comment page//
        $posts = fopen("posts.txt", 'a+');
        if(filesize("posts.txt") > 0){
        $section = fread($posts, filesize("posts.txt"));
        $usercomment = explode("\n", $section);
        $post_num = 1;
        foreach($usercomment as $postinfo){
            $post = explode(", ", $postinfo);
            array_push($post, $post_num);
            if(count($post)<6){
                continue;
            }
            echo "<br/>";
            echo "<hr/>";
            echo "<div>$post_num.    Name: <a href ='mailto:$post[1]'>$post[0]</a><br/>Comment: $post[2]<br/>$post[3]<br/>$post[4]</div>";
            ++$post_num;
        }
        } else {
            echo "No comments posted yet.<br/>"
            . "Please go back to the <a href='commentformmenu.php'>Comment Page.</a>";
            
        }
           echo "<hr/>";
           
           echo "Delete a comment.<br/>(Type a comment number in the field)<br/><br/>";
           echo "<form action = 'commentdeletemenu.php' method = 'post'>"
           . "<input type = 'text' id = 'delete' name= 'delete' />
               <input type = 'submit' value = 'Delete Comment' />
               </form>";
           echo "<a href='commentformmenu.php'>Comment Page.</a>";
?>