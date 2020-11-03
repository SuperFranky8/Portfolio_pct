<?php

$name = $_POST['clientName'];
$email = $_POST['clientEmail'];
$textarea = $_POST['clientText'];

$chatId = "-453556300";
$botId = "1405798905:AAHNywjoqEa0jhKl37lRDUJipT_P6RJ50xc";

$array = array(
    "Users name" => $name,
    "Users email" => $email,
    "Users text" => $textarea,
)   ;

$reply = "";

foreach($array as $key => $value) {
$reply.=$key.": ".$value."%0A";
};

$submitTelegram = fopen("https://api.telegram.org/bot{$botId}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$reply}","r");

if ($submitTelegram) {
    echo "Message was sent";
} else {echo $reply}

?>

