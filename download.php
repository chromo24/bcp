<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 2/2/16
 * Time: 9:36 PM
 */

include_once "db.php";

$filename = "bcp.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$db->query("SET CHARACTER SET utf8");

$query = 'SELECT * FROM  `immanuel_berlin`.`registration` WHERE deleted = 0;';
$ds = $db->prepare($query);
$ds->execute();

// Write data to file
$flag = false;
while ($row = $ds->fetch( PDO::FETCH_ASSOC )) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo utf8_decode(implode("\t", array_values($row)) . "\r\n");
}
?>