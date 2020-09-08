<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'survey');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   $servername = DB_SERVER;
   $username = DB_USERNAME;
   $password = DB_PASSWORD;
   $dbname = DB_DATABASE;

   try {
      $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e)
   {
      die("OOPs something went wrong");
   }
?>