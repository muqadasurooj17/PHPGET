<?php
 echo"Name: " .$_GET['nm']."<br>";
 echo " Email: " .$_GET['em']."<br>";
 echo "Gender: ".$_GET['gender']."<br>";
 echo "Subjects: "."<br>";
 if(isset($_REQUEST['check1'])){
 	echo $_REQUEST['check1']."<br>";
 }
 if(isset($_REQUEST['check2'])){
 	echo $_REQUEST['check2']."<br>";
 }
if(isset($_REQUEST['check3'])){
 	echo $_REQUEST['check3']."<br>";
 }
if(isset($_REQUEST['check4'])){
 	echo $_REQUEST['check4']."<br>";
 }
 echo "Tell us about yourself:  ".$_GET['yourself']."<br>";

?> 