<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 12/6/15
 * Time: 11:08 PM
 */


$id = isset($_GET["id"])?$_GET["id"]:-1;
if($id==-1) die("Parameter missing");

include_once("db.php");

$query = "UPDATE `registration` SET `registration`.`payment_received` = NOW() WHERE id = ?;";

$stmt = $db->prepare($query);
$stmt->execute(array($id));


$query = "SELECT `registration`.`id`,
                `registration`.`name`,
                `registration`.`email`
            FROM `registration`
            WHERE id = ?;";

$stmt = $db->prepare($query);
if ($stmt->execute(array($id))) {
    while ($row = $stmt->fetch()) {
        sendConfirmationMail($row["email"],$row["name"]);
        echo "telah dibayar";
    }
}



function sendConfirmationMail($address,$name){
    $subject = 'Konfirmasi Pembayaran';
    $content = '<p>Yang terkasih [Name],
</p><p>
Terima kasih untuk pendaftaran Anda untuk Bible Camp Pemuridan 2016.
Dengan ini kami ingin mengkonfirmasikan bahwa kami telah menerima pengiriman uang Anda dan
dengan demikian Anda terdaftar sebagai peserta Bible Camp Pemuridan 2016.
</p><p>
Atas segala perhatian Saudara, kami ucapkan terima kasih.
</p><p>
Hormat kami,
</p><p>
Panitia Penyelenggara Bible Camp Pemuridan 2016
</p><p>
Hallo [Name],
</p><p>
Vielen Dank für Deine Anmeldung zum Bible Camp Pemuridan 2016.
Wir bestätigen Dir hiermit, dass wir Deine Zahlung erhalten haben und Du somit als Teilnehmer des Bible Camp Pemuridan 2016 angemeldet bist.
Wir freuen uns schon, Dich dort zu treffen.
</p><p>
Viele Grüße,
</p><p>
Das Veranstaltungsteam</p>';
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: pendaftaran.bcp@googlemail.com' . "\r\n" .
        'Reply-To: pendaftaran.bcp@googlemail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $content = str_replace("[Name]", $name, $content);
    mail($address, $subject, $content, $header);

}
