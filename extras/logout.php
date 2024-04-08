<?php
session_start();

// destroy the session
session_destroy();
header('Location: /repos/php-crash/13_sessions.php');
