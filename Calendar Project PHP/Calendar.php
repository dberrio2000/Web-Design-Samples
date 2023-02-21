<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 2</title>
        <link rel="stylesheet" type="text/css" href="Calstyle.css">
    </head>
    <body>
        <?php
            $month = date ("F");
            $year = date ("Y");
            $daysinmonth = (cal_days_in_month (CAL_GREGORIAN, date("m"), date("Y")));
            $getdate = getdate(mktime(null, null, null, date("m"), 1, $year));
            $firstday = $getdate["weekday"];
        
            
        ?>
        <!--Calendar Body-->
        <div class ="cal_container">
            <div class = "h1container">
                <h1><?php echo "$month $year"?></h1>
            </div>
            
            <div class ="weekdays">
                <div>Sunday</div>
                <div>Monday</div>
                <div>Tuesday</div>
                <div>Wednesday</div>
                <div>Thursday</div>
                <div>Friday</div>
                <div>Saturday</div>
            </div>
            
            <div class ="dates">
                 
                <style><?php include('Calstyle.css'); ?></style>
                
                <?php
                    $countdays = 1;
                    if ($countdays == 1){
                        echo "<div style = 'height:70px; grid-column: 3;'>$countdays </div>";
                        $countdays = 2;
                    }
                    while ($countdays < $daysinmonth + 1){
                           echo "<div style = 'height:70px;'>$countdays </div>";
                            ++$countdays;
                       }
                       
                       
                       
                    
                ?> 
                </div>
                
            </div>
    </body>
</html>
