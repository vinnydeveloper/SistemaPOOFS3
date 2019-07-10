<?php 

  $dsn =  "mysql:host=localhost;dbname=locadora;port=3306";
  $user = "root";
  $pass = "";


  try {
    $db = new PDO($dsn, $user, $pass);
  }catch(PDOException $ex){
        echo "<h1>Houve uma falha na conexão!Verifique se o servidor ou os dados de conexão estão corretas!</h1>";
        exit;
  }
   