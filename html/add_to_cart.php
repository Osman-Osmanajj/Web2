<?php

session_start();

require_once '../database/dbconnection.php'; // Përfshini lidhjen tuaj me bazën e të dhënave

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book_title'])) {
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_price = $_POST['book_price'];

    // Shto librin në tabelën e shportës së blerjeve në databazë
    $stmt = $pdo->prepare('INSERT INTO shopping_cart (book_title, book_author, book_price) VALUES (?, ?, ?)');
    $stmt->execute([$book_title, $book_author, $book_price]);

    // Përditëso shportën e blerjeve në sesion (ose mund të qëndrojë vetëm në databazë nëse doni)
    if (isset($_SESSION['cart'][$book_title])) {
        $_SESSION['cart'][$book_title]['sasi']++;
    } else {
        $_SESSION['cart'][$book_title] = [
            'autor' => $book_author,
            'çmim' => $book_price,
            'sasi' => 1
        ];
    }
}

header('Location: cart.php');
exit();



?>




