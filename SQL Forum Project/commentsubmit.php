<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
    <title>Comment Submission</title>
     <link rel="stylesheet" href="formpage.css" />
</head>

<body>
    <h1>Comments</h1>
    <div>
        <?php

       $validate = file_get_contents("posts.txt");
//set default timezones and assign date and time variables//
       date_default_timezone_set("America/New_York");
       $date = date("m-d-Y");
       $time = date("h:i A");
       $name = $_POST['name'];
       $email = $_POST['email'];
       $comment = $_POST['comment'];
       
//assign all posted form values to an associative array for data storage//
       $userpost = array("Name" => "$name",  "Email" => "$email", "Comment" => "$comment", "Date" => "$date",
                         "Time" => $time);
       echo "<br />";
       
//open file to write the array, else it will display an error if no data is saved//
       if (strpos($validate, $email) <= 0){
       $posts = fopen('posts.txt', 'a+');
       if(fwrite($posts, "$name, $email, $comment, $date, $time\n") > 0){
           echo "Comment posted successfully!";
        $posts = fopen("posts.txt", 'a+');
        if(filesize("posts.txt") > 0){
        $section = fread($posts, filesize("posts.txt"));
        $usercomment = explode("\n", $section);
        $post_num = 1;
        foreach($usercomment as $postinfo){
            $post = explode(", ", $postinfo);
            if(count($post)<5){
                continue;
            }
            
            echo "<br/>";
            echo "<hr/>";
            echo "<div>$post_num.       Name: <a href ='mailto:$post[1]'>$post[0]</a><br/>Comment: $post[2]<br/>$post[3]<br/>$post[4]</div>";
            ++$post_num;
            }
        
        } else {
            echo "No Comments posted yet.";
        }
        
           
           
           echo "<hr/>";
           echo "<a href='commentform.php'>Back to comment page</a>";
       } else {
           "Your comment was not posted.";
       }
       } else {
          echo "You can not comment more than once.<br/>
               Are you someone else? Go back to the <a href='commentformmenu.php'>Comment Page.</a>";
       }

            
            
       
      
?>
    </div>
</body>
