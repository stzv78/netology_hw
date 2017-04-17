<?php
require_once 'session.php';

$csrfToken = '';
if (empty($_POST['csrf']) || isset($_POST['inquiry'])) {
    $_SESSION['csrfTokenPost'] = $_SESSION['csrfToken'];
    if (version_compare(PHP_VERSION, '7.0.0', '<=')) {
        $csrfToken = bin2hex(random_bytes(32));
    } else {
        if (function_exists('mcrypt_create_iv')) {
            $csrfToken = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_RANDOM));
        } else {
            $csrfToken = bin2hex(openssl_random_pseudo_bytes(32));
        }
    }
    $_SESSION['csrfToken'] = $csrfToken;
}