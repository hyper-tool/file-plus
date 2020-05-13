<?php
$zip = new ZipArchive;
$file = $argv[1];
var_dump($file);
if ($zip->open('./' . $file) === true) {
    $zip->extractTo('./unzip');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
