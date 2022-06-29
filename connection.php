<?php
  
$conn = "";
   
try {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bibliotecadigital";

   
    $conn = new PDO(
        "mysql:host=$servername; dbname=$dbname",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
  
?>