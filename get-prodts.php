<?php
require 'db.php';
if(isset($Category)){
    $result=$connection->query("select * from products where category=$Category;");
}else{
    $result=$connection->query("select * from products ");
}


?>