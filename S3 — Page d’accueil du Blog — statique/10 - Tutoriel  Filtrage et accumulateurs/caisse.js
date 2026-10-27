let cart = [15, 42, 5, 89, 12, 50, 8];

let total = 0;
let expensiveCount = 0;
let expensiveTotal = 0;

for (let i = 0; i < cart.length; i++) {
    total = total + cart[i];

    if (cart[i] >= 20) {
        expensiveCount++;
        expensiveTotal = expensiveTotal + cart[i];
    }
}

console.log("Total cart:", total);
console.log("Number of expensive items:", expensiveCount);
console.log("Amount of expensive items:", expensiveTotal);
