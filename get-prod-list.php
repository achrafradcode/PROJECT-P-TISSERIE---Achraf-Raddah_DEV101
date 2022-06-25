<?php
require 'db.php';
$result=$connection->query("select * from products ");

echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));



?>