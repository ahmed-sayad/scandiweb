document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        const sku = document.getElementById('sku').value.trim();
        const name = document.getElementById('name').value.trim();
        const price = document.getElementById('price').value.trim();
        const type = document.getElementById('type').value.trim();

        if (!sku || !name || !price || !type) {
            alert('Please fill out all fields');
            event.preventDefault();
        }
    });
});
