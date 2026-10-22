const prompt = require("prompt-sync")();

const secret = Math.floor(Math.random() * 100) + 1;

let tries = 0;

while (true) {
  const input = prompt("Guess a number between 1 and 100: ");

  if (input === null) {
    console.log("Game cancelled.");
    break;
  }
  tries++;

  const guess = Number(input);

  if (input.trim() === "" || !Number.isInteger(guess) || guess < 1 || guess > 100) {
    console.log("This is invalid");
    continue;
  }

  if (guess < secret) {
    console.log("It's bigger!");
  } else if (guess > secret) {
    console.log("It's smaller!");
  } else {
    console.log("You win! The number was " + secret + " in " + tries + " tries.");
    break;
  }
}