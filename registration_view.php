<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 12/6/15
 * Time: 10:16 PM
 */

$id = isset($_GET["id"])?$_GET["id"]:-1;
if($id==-1) die("Parameter missing");

include_once("db.php");

$query = "SELECT `registration`.`id`,
                `registration`.`name`,
                `registration`.`birthday`,
                `registration`.`address`,
                `registration`.`city`,
                `registration`.`postcode`,
                `registration`.`telephone`,
                `registration`.`email`,
                `registration`.`curch_city`,
                `registration`.`status`,
                `registration`.`status_others`,
                `registration`.`attended`,
                `registration`.`emergency_contact`,
                `registration`.`emergency_address`,
                `registration`.`allergic`,
                `registration`.`translator`,
                `registration`.`notes`,
                `registration`.`timestamp`,
                `registration`.`payment_received`
            FROM `registration`
            WHERE id = ?;";

$stmt = $db->prepare($query);
if ($stmt->execute(array($id))) {
    while ($row = $stmt->fetch()) {
        echo '<button class="view-detail-close" style="position: absolute;top: 5px; right: 5px;">X</button>';
        echo '<table class="table table-bordered" style="text-align: left;">';
        echo '<tr><td>Id</td><td>'.($row['id']+100).'</td></tr>';
        echo '<tr><td>Nama</td><td>'.$row['name'].'</td></tr>';
        $date = new DateTime($row['birthday']);
        echo '<tr><td>Tanggal Lahir</td><td>'. $date->format('d-m-Y').'</td></tr>';
        echo '<tr><td>Alamat</td><td>'.$row['address'].'</td></tr>';
        echo '<tr><td>Kota</td><td>'.$row['city'].'</td></tr>';
        echo '<tr><td>Kode Pos</td><td>'.$row['postcode'].'</td></tr>';
        echo '<tr><td>Telephone</td><td>'.$row['telephone'].'</td></tr>';
        echo '<tr><td>Email</td><td>'.$row['email'].'</td></tr>';
        echo '<tr><td>Kota Persekutuan</td><td>'.$row['curch_city'].'</td></tr>';
        echo '<tr><td>Status</td><td>'.$row['status'].'</td></tr>';
        echo '<tr><td>Status Lainnya</td><td>'.$row['status_others'].'</td></tr>';
        echo '<tr><td>Pernah Ikut BCP</td><td>'.($row['attended']==1?"Ya":"Tidak").'</td></tr>';
        echo '<tr><td>Kontak Emergensi</td><td>'.$row['emergency_contact'].'</td></tr>';
        echo '<tr><td>Alamat Emergensi</td><td>'.$row['emergency_address'].'</td></tr>';
        echo '<tr><td>Alergi</td><td>'.$row['allergic'].'</td></tr>';
        echo '<tr><td>Penterjemah</td><td>'.($row['translator']==1?"Ya":"Tidak").'</td></tr>';
        echo '<tr><td>Catatan</td><td>'.$row['notes'].'</td></tr>';
        echo '<tr><td>Daftar pada</td><td>'.$row['timestamp'].'</td></tr>';
        echo '</table>';
    }
}