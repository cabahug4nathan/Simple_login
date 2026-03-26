<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'simple_login';
try {
    $pdo = new PDO("mysql:host=$host;port=3307;dbname=$database;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}