<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
setcookie('accept_cookies', 'true', time() + 365*24*3600, null, null, false, true);