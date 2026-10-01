const prompt = require ("prompt-sync")();
let fullname = prompt("What Your Name? ");
let product = prompt("Please Entre Product Name: ");
let quantity = prompt("Please Entre Quantity: ");
let price = prompt("Please Entre Price ");
let total = quantity * price;
console.log("Welcome", fullname ,"Your Bill is" , total , "For",quantity ,product);