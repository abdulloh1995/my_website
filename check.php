<?php 
// print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];


$error = '';
if(trim($email) == '') {
    $error = 'Email kiriting';
}elseif (trim($message) == '') {
    $error = 'Xabarni kiriting';
}elseif (strlen($message) < 10) {
    $error = 'Xabar 10ta harflardan kam bolmasin';
}


if($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Test xabar")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('developer.sobirov4448@gmail.com', $subject, $message, $headers);

header('Location: /my_projects/php_Gosha_Dudar/about.php');

?>