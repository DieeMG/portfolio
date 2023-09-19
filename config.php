<?php

$user_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$language_file = __DIR__ . '/assets/strings/en.php';

if ($user_language == 'es') {
    $language_file = __DIR__ . '/assets/strings/es.php';
}

include($language_file);
