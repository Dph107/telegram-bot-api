<?php
    
require_once 'functions.php';

if(!checkRemoteIPisTelegram())
    die('You are not Telegram');

const TOKEN = "xxx"; // API_KEY

$update_array = json_decode(file_get_contents("php://input"), 1);  // JSON

if (isset($update_array["message"])) {
    $text    = $update_array["message"]["text"]; //text User
    $chat_id = $update_array["message"]["chat"]["id"]; //chat id type

if ($text == "/start") {
    sendMessage([
        'chat_id' => $chat_id,
        'text' => var_export($update_array, true)
    ]);
}

?>