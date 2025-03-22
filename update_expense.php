<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = "UPDATE expenses SET title = :title, amount = :amount, category = :category, description = :description, date = :date WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':title' => $title,
        ':amount' => $amount,
        ':category' => $category,
        ':description' => $description,
        ':date' => $date
    ]);

    header('Location: view_expenses.php');
    exit;
}
?>