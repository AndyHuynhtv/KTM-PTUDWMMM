// cart.js

// Function to increase product quantity
function increaseQuantity() {
    let quantity = parseInt(document.getElementById("quantity").value);
    quantity += 1;
    document.getElementById("quantity").value = quantity;
}

// Function to decrease product quantity
function decreaseQuantity() {
    let quantity = parseInt(document.getElementById("quantity").value);
    if (quantity > 1) {
        quantity -= 1;
        document.getElementById("quantity").value = quantity;
    }
}

// Event listeners for quantity control buttons
document.getElementById("increase").addEventListener("click", increaseQuantity);
document.getElementById("decrease").addEventListener("click", decreaseQuantity);
