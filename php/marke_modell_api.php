<?php
$servername = "172.14.0.108";
$username = "cars";
$password = "cars";
$dbname = "car_db";


//example call for models: http://localhost/php/marke_modell.php?marke=VW
//example call for vendors: http://localhost/php/marke_modell.php

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/* liefert Modelle für bestimmte Marke */
  if (isset($_GET['marke'])){
    $stmt = $conn->prepare("SELECT id, marke, modell FROM auto WHERE marke LIKE :marke");
    $marke = $_GET['marke'];
    $stmt->execute(['marke'=>$marke]);

    while ($row = $stmt->fetch()) {
      echo $row['modell'].",";
    }
  }

	/* liefert alle Markennamen */
  else{
    $stmt = $conn->prepare("SELECT DISTINCT(marke) AS marke FROM auto");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
      echo $row['marke'].",";
    }
    return;
  }


}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>
