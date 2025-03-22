<?php include 'header.php'; ?>
<?php include 'db_connect.php'; ?>

<h1>View All Expenses</h1>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Amount</th>
            <th>Category</th>
            <th>Description</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM expenses ORDER BY date DESC";
        $stmt = $conn->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['title']}</td>
                    <td>₹{$row['amount']}</td>
                    <td>{$row['category']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['date']}</td>
                    <td>
                        <a href='edit_expense.php?id={$row['id']}'>Edit</a>
                        <a href='delete_expense.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>