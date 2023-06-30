<?php 

 $server ='localhost';
 $user = "root";
 $pass = "";
 $db = "table1";
 $connection= mysqli_connect($server,$user,$pass,$db);
 if(!$connection){
    echo "<script type='text/javascript'>alert('connection Failed')</script>";
 }



?>