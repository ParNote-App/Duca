<?php

function read_file($path)
{
    $result = new finfo(FILEINFO_MIME_TYPE);

    $mimes = new \Mimey\MimeTypes;

    header('Content-Type: ' . $mimes->getMimeType(explode(".", $path)[1]));

    header('Content-Disposition: inline; filename="' . basename($path) . '"');

    ob_clean();
    flush();
    readfile($path);
    die();
}
