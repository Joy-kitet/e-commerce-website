<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
}

header('Location: cart.php');
exit;
