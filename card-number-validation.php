<?php
$cards = [
    "1234 5678 9012 3456",
    "1234-5678-9012-3456",
    "1234567890123456",
    "1234 5678 9012", // ошибка
];

$pattern = "/\b(?:\d{4}[- ]?){3}\d{4}\b/";

foreach ($cards as $card) {
    echo "$card: " . (preg_match($pattern, $card) ? "верный" : "ошибка") . "<br>";
}
