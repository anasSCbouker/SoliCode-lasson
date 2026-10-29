let sales = [110, 75, 150, 180, 90, 130, 100, 160];

let count = 0;
let totalRevenue = 0;
let maxSale = sales[0];
let minSale = sales[0];
let exceptionalCount = 0;
let exceptionalRevenue = 0;

for (let i = 0; i < sales.length; i++) {
    let amount = sales[i];

    count++;

    totalRevenue = totalRevenue + amount;

    if (amount > maxSale) {
        maxSale = amount;
    }

    if (amount < minSale) {
        minSale = amount;
    }

    if (amount >= 130) {
        exceptionalCount++;
        exceptionalRevenue = exceptionalRevenue + amount;
    }
}
console.log("Number of sales:", count);
console.log("Total revenue:", totalRevenue);
console.log("Max sale:", maxSale);
console.log("Min sale:", minSale);
console.log("Exceptional sales:", exceptionalCount);
console.log("Exceptional revenue:", exceptionalRevenue);