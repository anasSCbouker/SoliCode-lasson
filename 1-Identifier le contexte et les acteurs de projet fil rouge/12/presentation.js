const prompt = require ("prompt-sync")();
let firstname = prompt("What your first name? ");
let lastname = prompt ("What your last name? ")
let hello = firstname + " " + lastname;
console.log("Hello" , hello);
