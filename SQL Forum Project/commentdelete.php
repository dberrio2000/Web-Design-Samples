<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>


<head>
    <title>Comment Submission</title>
     <link rel="stylesheet" href="formpage.css" />
</head>

<?php
    $delete = $_POST['delete'];
    
    $posttext = fopen("posts.txt", "a+");
    $read = fread($posttext, filesize("posts.txt"));
    $lines = explode("\n", $read);
    $post_num = 1;
    foreach ($lines as $data){
        $post = explode(", ", $data);
        array_push($post, $post_num);
        if(count($post)<5){
                continue;
            }
            echo "<br/>";
            echo "<hr/>";
            if ($delete == $post[5]){
                echo "Your comment has been deleted.";
                echo "<hr/>";
                echo "<a href='commentformmenu.php'>Return to comment page.</a>";
                exit;
            }
            echo "<div>$post[5].<br/><br/>  Name: <a href ='mailto:$post[1]'>$post[0]</a><br/>Comment: $post[2]<br/>$post[3]<br/>$post[4]</div>";
            ++$post_num;
            
        }
   
?>
