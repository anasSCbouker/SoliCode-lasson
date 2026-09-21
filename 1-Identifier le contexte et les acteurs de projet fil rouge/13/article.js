<<<<<<< HEAD
const prompt = require ("prompt-sync")();
let fullname = prompt("What Your Name? ");
let product = prompt("Please Entre Product Name: ");
let quantity = prompt("Please Entre Quantity: ");
let price = prompt("Please Entre Price ");
let total = quantity * price;
=======
const prompt = require ("prompt-sync")();
let fullname = prompt("What Your Name? ");
let product = prompt("Please Entre Product Name: ");
let quantity = prompt("Please Entre Quantity: ");
let price = prompt("Please Entre Price ");
let total = quantity * price;
>>>>>>> a0b6ef85928b5ba3d721a13fc70faaa1bf812be6
console.log("Welcome", fullname ,"Your Bill is" , total , "For",quantity ,product);