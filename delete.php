<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 1/4/16
 * Time: 9:16 PM
 */


$id = isset($_GET["id"])?$_GET["id"]:-1;
if($id==-1) die("Parameter missing");

include_once("db.php");

$query = "UPDATE `registration` SET `registration`.`deleted` = 1 WHERE id = ?;";

$stmt = $db->prepare($query);
$stmt->execute(array($id));

echo "1";