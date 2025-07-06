<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    $response  = "CON What would you want to check \n";
    $response .= "1. My Account \n";
    $response .= "2. My phone number";

} else if ($text == "1") {
    $response  = "CON Choose account information you want to view \n";
    $response .= "1. Account number";

} else if ($text == "2") {
    $response = "END Your phone number is ".$phoneNumber;

} else if ($text == "1*1") {
    $accountNumber  = "ACC1001";
    $response = "END Your account number is ".$accountNumber;

} else {
    $response = "END Invalid choice. Please try again.";
}

header('Content-type: text/plain');
echo $response;
?>
