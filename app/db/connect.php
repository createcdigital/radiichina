<?php 
    $mysql_server_name='localhost'; 
    $mysql_username='radiichina'; 
    $mysql_password='e1OKmKq4w^ygK6L7bX';
    $mysql_database='radiichina';
  
    $conn = mysqli_connect($mysql_server_name, $mysql_username, $mysql_password,$mysql_database);
    if($conn)
    	mysqli_query($conn,"SET NAMES 'utf8'");


    date_default_timezone_set("Asia/Shanghai");
?>