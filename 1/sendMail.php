<?php

echo 'Відправка повідомлення...' . "\n";

$subject = '1 практична';
echo '============' . "\n";
echo "Тема: " . "\n" . $subject . "\n";

$firstName = 'Bohdan Dudchenko | group 539';
$name = "Ім'я: {$firstName}" . "\n";

// Опис
$title = $subject . "\n";
$desc = "Виконання першої практичної роботи" . "\n";

$message = $name . $title . $desc;

echo "\n" . 'Тіло повідомлення:' . "\n";

echo $message . "\n";

echo '============' . "\n";

$headers = 'From: b.i.dudchenko@student.khai.edu';

if (mail('b.i.dudchenko@student.khai.edu', $subject, $message, $headers)) {
    echo "Лист успішно надіслано";
} else {
    echo "Помилка при відправленні листа";
}

?>