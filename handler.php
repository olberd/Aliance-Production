<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['user-phone']);

$token = "850435752:AAH8IG4Uzu3XiGZ61FAbHTBUb706Sc9hCHQ";
$chat_id = "-4841117174";
$text = "";

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);


foreach($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
    echo "Success";
} else {
    echo "Error";
}
