let nombres = [23, 15, 42, 9, 31, 18, 42, 5];

let max = nombres[0];
let positionMax = 0;

for (let i = 1; i < nombres.length; i++) {
    if (nombres[i] > max) {
        max = nombres[i];
        positionMax = i;
    }
}

console.log("Maximum: " + max + " (Index: " + positionMax + ")");

let min = nombres[0];
let positionMin = 0;

for (let i = 1; i < nombres.length; i++) {
    if (nombres[i] < min) {
        min = nombres[i];
        positionMin = i;
    }
}

console.log("Minimum: " + min + " (Index: " + positionMin + ")");

let recherche = 31;
let position = -1;

for (let i = 0; i < nombres.length; i++) {
    if (nombres[i] === recherche) {
        position = i;
    }
}

if (position !== -1) {
    console.log("La valeur " + recherche + " est présente dans le tableau.");
} else {
    console.log("La valeur " + recherche + " est absente du tableau.");
}