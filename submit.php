<?php
    $name = $_POST['uzivatel'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $message = $_POST['zprava'];
    $lokalita = $_POST['lokalita'];

$to = "info@bioanalyzazlin.cz";
$subject = "Nova objednavka";
$message = "Jméno: $name\nEmail: $email\nTel: $phone\n\n$message\n\n$lokalita";
$headers = "from: info@bioanalyza-zdravi.cz \n";
$headers .= "X-mailer: phpWebmail \n";
if( mail($to, $subject, $message, $headers) )
    {echo "OK - mail odeslán";}
else
    {echo "CHYBA - odeslání se nepovedlo";}
?>