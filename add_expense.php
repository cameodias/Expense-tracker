<?php include 'header.php'; ?>

<div class="container">
    <h1>Add New Expense</h1>

    <div class="form-container">
        <form action="add_expense.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" required>

            <label for="category">Category:</label>
            <input type="text" name="category" id="category" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>

            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>

            <button type="submit">Add Expense</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = "INSERT INTO expenses (title, amount, category, description, date) VALUES (:title, :amount, :category, :description, :date)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':amount' => $amount,
        ':category' => $category,
        ':description' => $description,
        ':date' => $date
    ]);

    header('Location:view_expenses.php');
    exit;
}
?>