function changeForm() {
    const productType = document.getElementById('productType').value;
    const dynamicForm = document.getElementById('dynamic-form');
    
    let formHtml = '';
    let description = '';
    
    if (productType === 'DVD') {
        formHtml = `
            <label for="size">Size (MB)</label>
            <input type="text" id="size" name="size"><br>
            <p>Product description</p>
        `;
    } else if (productType === 'Furniture') {
        formHtml = `
            <label for="height">Height (CM)</label>
            <input type="text" id="height" name="height"><br>
            <label for="width">Width (CM)</label>
            <input type="text" id="width" name="width"><br>
            <label for="length">Length (CM)</label>
            <input type="text" id="length" name="length"><br>
            <p>Product description</p>
        `;
        description = 'Please provide dimensions in HxWxL format';
    } else if (productType === 'Book') {
        formHtml = `
            <label for="weight">Weight (KG)</label>
            <input type="text" id="weight" name="weight"><br>
            <p>Product description</p>
        `;
    }
    
    dynamicForm.innerHTML = formHtml;
    
    if (description) {
        dynamicForm.innerHTML += `<p>${description}</p>`;
    }
}

function save() {
    // Implement save functionality
    alert('Save button clicked');
}

function cancel() {
    // Implement cancel functionality
    alert('Cancel button clicked');
}
