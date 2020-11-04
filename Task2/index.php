<?php

declare(strict_types=1);

const IMAGES_PATH = './images/';

$conn = pg_connect("host=localhost dbname=postgres");
if (!$conn) {
    echo "Произошла ошибка.\n";
    exit;
}

$result = pg_query($conn, "SELECT name FROM images");
if (!$result) {
    echo "Произошла ошибка.\n";
    exit;
}

$unexistingImages = [];
while ($row = pg_fetch_row($result)) {
    $imageFileName = trim($row[0]);
    if (!file_exists(IMAGES_PATH.$imageFileName)) {
        $unexistingImages[] = $imageFileName;
    }
}

echo "Несуществующие изображения:".PHP_EOL;
foreach ($unexistingImages as $kew => $unexistingImageFileName) {
    echo $unexistingImageFileName.PHP_EOL;
}