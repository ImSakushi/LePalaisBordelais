<?php
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 