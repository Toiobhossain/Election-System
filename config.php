<?php
 $server="localhost";
 $dbname="electionsystem";
 $dbuser="root";
 $dbpass="";
 $con=mysqli_connect($server,$dbuser,$dbpass,$dbname);
 if($con)
 {
 	echo 'success to databased with connect';
 }
 else
 {
 	echo 'faild to databased with connect';
 }
?>