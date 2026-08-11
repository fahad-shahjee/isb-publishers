<?php
// Automatically detect if running locally or on the live server
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$hostname = preg_replace('/:\d+$/', '', $host); // strip a port, if present

if ($hostname === 'localhost' || $hostname === '127.0.0.1') {
    // Served from a subfolder under Apache's htdocs/www (e.g. Laragon)
    $BASE_URL = 'http://' . $host . '/isb-publishers/';
} elseif (preg_match('/\.(test|local)$/', $hostname)) {
    // Laragon auto-vhost (e.g. isb-publishers.test) — served at the domain root
    $BASE_URL = 'http://' . $host . '/';
} else {
    // Live server
    $BASE_URL = 'https://isbghostwriters.com/';
}
?>
