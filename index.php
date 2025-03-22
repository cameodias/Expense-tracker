<?php include 'header.php'; ?>
<?php include 'db_connect.php'; ?>

<div class="container">
    <h1>Expense Tracker Dashboard</h1>

    <table class="dashboard-table">
        <tr>
            <th>Total Expenses</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>
                <?php
                // Fetch total expenses
                $sql = "SELECT SUM(amount) AS total FROM expenses";
                $stmt = $conn->query($sql);
                $total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
                ?>
                <p class="total-amount">₹<?php echo isset($total) ? $total : '0.00'; ?></p>
            </td>
            <td class="actions">
                <a href="add_expense.php" class="button">Add New Expense</a>
                <a href="view_expenses.php" class="button">View All Expenses</a>
            </td>
        </tr>
    </table>
</div>

<?php include 'footer.php'; ?>