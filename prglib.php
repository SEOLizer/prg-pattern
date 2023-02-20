<?php


function createUrlHash($url,$salt) {
    return md5($salt . $url);
}

function createPRGString($url,$salt) {
    return 'data-adr="' . base64_encode($url) . '" data-hash="' . createUrlHash($url,$salt) . '"';
}

function createPRGTag($url,$salt,$anker,$cssClasses) {
    return '<span class="prglink ' . $cssClasses . '" ' . createPRGString($url,$salt) . '>' . $anker . '</span>';
}