<?php
session_start();
include 'config/database.php';

if (isset($_SESSION['user_id'])) {
    header('Location: pages/dashboard.php');
    exit;
} else {
    header('Location: login.php');
    exit;
}
?>
