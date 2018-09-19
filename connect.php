<?php

//phpinfo();

header('Content-Type: text/html; charset=utf-8');


try
{
    $pdo = new PDO('mysql:host=XX;dbname=YY', 'ZZ', 'AA');

}
catch (PDOException $e)
{
    echo 'Error: ' . $e->getMessage();
    exit();
}

// Run Query
$sql 	= 'SELECT * FROM crypto_pricing';
$stmt 	= $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
$stmt->execute();
while ($row = $stmt->fetch())
{
    echo $row['Symbol'];
}

// Close connection
$pdo = null;





?>

