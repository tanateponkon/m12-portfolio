<?php
$method = $_SERVER['REQUEST_METHOD'];
$name = '';
if ($method === 'GET') {
    $name = $_GET['displayName'] ?? '';
} elseif ($method === 'POST') {
    $name = $_POST['displayName'] ?? '';
}
$name = trim($name);
$safeName = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
