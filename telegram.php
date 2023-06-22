<?php

/* https://api.telegram.org/bot5916908819:AAHuvoDvXGLZUcUWbwi5j-bTrvuePLSU55w/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_tel'];
$token = "5916908819:AAHuvoDvXGLZUcUWbwi5j-bTrvuePLSU55w";
$chat_id = "-957983986";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $tel,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>