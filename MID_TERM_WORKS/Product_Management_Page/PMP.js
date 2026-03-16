
const unitPrice = 1000;

let quantityInput = document.getElementById("quantity");
const totalDisplay = document.getElementById("total");

quantityInput.addEventListener("input", function(){

    let quantity = parseInt(quantityInput.value);

    // prevent negative value
    if(quantity < 0){
        alert("Quantity cannot be negative");
        quantity = 0;
        quantityInput.value = 0;
    }

    let total = unitPrice * quantity;

    totalDisplay.value = total;

    if(total > 1000){

       
        alert("Congratulations! You are eligible for a Gift Coupon!");
         
    }

});