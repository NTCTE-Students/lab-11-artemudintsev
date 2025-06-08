<?php
$html = "<div>Привет</div><br><a href='#'>Ссылка</a>";
$pattern = "/<[^>]+>/";
preg_match_all($pattern, $html, $matches);
print_r($matches[0]);
