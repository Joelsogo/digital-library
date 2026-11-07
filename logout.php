<?php
require_once 'includes/config.php';

if (is_logged_in()) {
    try {
        $log = $dbh->prepare("INSERT INTO activity_log (user_id, action, details, ip_address) VALUES (?, 'logout', 'User logged out', ?)");
        $log->execute([$_SESSION['user_id'], $_SERVER['REMOTE_ADDR'] ?? null]);
    } catch (Exception $e) {}
}

$_SESSION = [];
if (ini_get('session.use_cookies')) {
    $p = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
}
session_destroy();

header('Location: login.php');
exit;
