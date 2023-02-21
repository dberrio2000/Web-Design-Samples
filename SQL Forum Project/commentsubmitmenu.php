<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns ="http://www.w3.org/1999/xhtml"/>
<head>
    <link rel="stylesheet" href="https://helios.vse.gmu.edu/~dberrio/IT207/css/Lab%20Practice.css" type="text/css" />
</head>
<div class = "grid-container" >
<div class = "column side" >

<!--Start of the navigation links for assignments-->

<h1>Homepage</h1>
	<ul>
		<li><a href ="https://helios.vse.gmu.edu/~dberrio/IT207/index/index.php"> Home</a></li>

<h1>Lab Assignments</h1>   
	<ul>	
		<li><a href ="https://helios.vse.gmu.edu/~dberrio/IT207/LAB1/Practice%20Lab.php"> Assignment 1</a></li>
		<li><a href ="https://helios.vse.gmu.edu/~dberrio/IT207/LAB2/form.php">Assignment 2</a></li>
		<li><a href = "https://helios.vse.gmu.edu/~dberrio/IT207/LAB3/Directory.html"> Assignment 3</a></li>
		<li><a href = "https://helios.vse.gmu.edu/~dberrio/IT207/LAB4/commentformmenu.php"> Assignment 4</a></li>
	</ul>
<h1>Lab Practica</h1>   
	<ul>	
		<li><a href ="https://helios.vse.gmu.edu/~dberrio/IT207/LABP1/calc.html"> Practicum 1</a></li>
		<li><a href = "https://helios.vse.gmu.edu/~dberrio/IT207/LABP2/"> Practicum 2</a></li>
	</ul>
<!--End of the navigation links for assignments-->
</div>

<!--Start of bio section-->
<div class = "column">
<h1>Applied IT Programming, IT 207-B03, Summer Semester</h1>
<p>Professor Rajendra Mallampati</p>
<p>George Mason University</p>
</div>


<div class = "column2">
<h1><b>Darion Berrios</b></h1>
<p><a href="mailto:darionberrios@gmail.com">darionberrios@gmail.com</a></p>
<h1>Last Modified:</h1>
<?php
include ('last modified.php');
?>

</div>

<!--End of bio section-->

<div class = "content">
<?php
include ('commentsubmit.php');
?>
</div>

<!--Footer section-->
<div class="disclaimer">
<p><i>This web site is entirely original work and full academic copyright is retained. This web site complies
with the Mason Honor Code (http://oai.gmu.edu/mason-honor-code/).</i>
</p>
</div>
</div>
<!--End of Footer section-->

