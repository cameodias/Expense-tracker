// Confirmation dialog for deleting an expense
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            if (!confirm('Are you sure you want to delete this expense?')) {
                e.preventDefault(); // Stop the link from navigating
            }
        });
    });
});


