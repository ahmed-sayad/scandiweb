function deleteSelected() {
    const form = document.getElementById('product_list_form');
    const checkboxes = document.querySelectorAll('.delete-checkbox:checked');
    if (checkboxes.length > 0) {
        if (confirm('Are you sure you want to delete the selected items?')) {
            form.submit();
        }
    } else {
        alert('Please select at least one item to delete');
    }
}
