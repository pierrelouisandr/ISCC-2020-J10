<?php 
      function connect_to_database(){
     $servername = 'localhost';
     $username = 'root';
     $password= '';
     $madatabase = 'basetest01';


try { 
    $pdo = new PDO("mysql:host=$servername;dbname=$madatabase",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully"; 
return $pdo;
}

catch (PDOException $e){
    echo "connection failled : ".$e->getMessage();
}
}

$pdo= connect_to_database();

$query = $pdo->query("SELECT*FROM produit");
$user = $query->fetch();

$users = $pdo->query("SELECT*FROM produit")->fetchAll();
     
foreach ($users as $user)
 {
   echo "<ul><li>";
   echo $user ['nom'];
   echo "</li></ul>";
}
?>