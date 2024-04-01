<?php
// 这里是保存留言的 PHP 文件，例如 save_message.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $timestamp = date("Y-m-d H:i:s");

    // 将留言保存到数据库或文件中
    // 这里使用文件作为示例
    $file = 'messages.txt';
    $data = "$name|$timestamp|$message\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // 返回成功响应
    http_response_code(200);
} else {
    // 如果不是 POST 请求，返回错误响应
    http_response_code(400); // Bad Request
}
?>