<?php
require 'db.php';
$prodId = $row['productId'];
$reviewList=$connection->query("select * from productsreviews where productId=$prodId");

?>