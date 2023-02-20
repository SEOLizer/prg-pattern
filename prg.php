<?php


$url = base64_decode($_POST["u"]);

$hash = $_POST["h"];
$urlhash = md5("wngmn" . $url);

if ($hash == $urlhash) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $url);
    header("X-Robots-Tag: noindex");
    header("Connection: close");
} else {
    header("X-Robots-Tag: noindex");
    header("Location: https://www.ihre.domain");
}