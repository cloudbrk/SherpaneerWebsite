<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailFrom = $_POST['emailFrom'];
    $phoneNumber = $_POST['phoneNumber'];
    $companyName = $_POST['companyName'];
    $connectType = $_POST['connectType'];
    $emailBody = $_POST['emailBody'];
    $fileUpload = $_POST['fileUpload'];

    $mailTo = "charlien@sherpaneer.com"
    $headers = "From: ".$emailFrom;
    $txt = "You have a message from " $firstName.$lastName"./n/n".$emailBody;

    mail($mailTo, $firstName, $txt, $headers);

    header("Location: index.html?MessageSent");

}

?>
