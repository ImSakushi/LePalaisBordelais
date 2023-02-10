<?php

require_once __DIR__ . '/config.php';
setcookie('accept_cookies', 'true', time() + 365*24*3600, null, null, false, true);

if(isset($_SERVER['HTTP_REFERER']) AND !empty($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: /');
}