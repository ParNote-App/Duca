<?php

function read_file($path)
{
    $mimes = new \Mimey\MimeTypes;

    header('Content-Type: ' . $mimes->getMimeType(explode(".", $path)[1]));

    header('Content-Disposition: inline; filename="' . basename($path) . '"');

    flush();
    readfile($path);
    die();
}
