

<?php

    header('Content-Type: application/json'); 
   
    
    try {
        $conn = new PDO("mysql:host=localhost;dbname=isidore_table", 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    } catch(PDOException $e) {
    
    }

    $id = 1;

$stmt = $conn->prepare('SELECT * FROM tableau WHERE _idChantier = :idChantier ' ); //AND _idPorte = "564943d6-544d-4571-816f-4c543e9588ed-0010b74a
$stmt->bindParam(':idChantier', $id);
$stmt->execute();

$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
   
    echo json_encode($array); 
    
    

?>
