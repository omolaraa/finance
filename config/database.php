<?php

  define('DB_HOST', 'localhost');
  define('DB_USER', 'Tobi'); 
  define('DB_PASS', 'Queenzy');
  define('DB_NAME_1', 'php_dev');
  define('DB_NAME_2', 'blog');

  $conn_1 = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME_1);
  $conn_2 = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME_2);

  // $host = 'localhost';
  // $user = 'Tobi';
  // $password = 'Queenzy';
  // $dbname1 = 'php-dev';
  // $dbname2 = 'blog';

  // $conn_1 = new mysqli($host, $user, $password, $dbname1);
  // $conn_2 = new mysqli($host, $user, $password, $dbname2);

  // if($conn_1->connect_error){
  //   die('Connection Failed' . $conn->connect_error);
  // }

  if($conn_1->connect_error){
    die('Connection Failed' . $conn->connect_error);
  }
  if($conn_2->connect_error){
    die('Connection Failed' . $conn->connect_error);
  }

  // echo 'CONNECTED!'; 

?>