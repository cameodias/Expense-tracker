<?php include 'header.php'; ?>
<?php include 'db_connect.php'; ?>

<div class="container">
    <h1>Edit Expense</h1>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM expenses WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        $expense = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    ?>

    <div class="form-container">
        <form action="update_expense.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $expense['id']; ?>">

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?php echo $expense['title']; ?>" required>

            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" step="0.01" value="<?php echo $expense['amount']; ?>" required>

            <label for="category">Category:</label>
            <input type="text" name="category" id="category" value="<?php echo $expense['category']; ?>" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description"><?php echo $expense['description']; ?></textarea>

            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="<?php echo $expense['date']; ?>" required>

            <button type="submit">Update Expense</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>