<?php

/* https://api.telegram.org/bot502143577:AAEvldQ4Q-cpw_LEDDJQPmdyQNHMyAMWqGY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$token = "502143577:AAEvldQ4Q-cpw_LEDDJQPmdyQNHMyAMWqGY";
$chat_id = "-315472406";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение: ' => $message


);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");




?>