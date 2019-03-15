<?php
$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Введите ваше Имя ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Введите email ";
} else {
    $email = $_POST["email"];
}
// PHONE
if (empty($_POST["number"])) {
    $errorMSG .= "Введите номер ";
} else {
    $number = $_POST["number"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Желательно, чтобы вы написали ваш запрос ";
} else {
    $message = $_POST["message"];
}
$EmailTo = "owl2693@gmail.com";
$Subject = "Новое сообщение от UreTime Kiev";
// prepare email body text
$Body = "";
$Body .= "Имя: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Номер: ";
$Body .= $number;
$Body .= "\n";
$Body .= "Сообщение: ";
$Body .= $message;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "Удачно!";
}else{
    if($errorMSG == ""){
        echo "Что-то пошло не так :(";
    } else {
        echo $errorMSG;
    }
}
?>