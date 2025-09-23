<?php
// Automatically detect if running on localhost or a live server
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // Localhost URL
    $BASE_URL = 'http://localhost/isbpublishers/';
} else {
    // Change this to your live domain when you upload
    $BASE_URL = 'https://ivory-shark-915148.hostingersite.com/'; 
}
?>
