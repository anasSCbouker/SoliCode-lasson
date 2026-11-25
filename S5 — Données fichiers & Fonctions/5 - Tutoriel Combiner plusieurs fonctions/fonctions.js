function calculerSomme(tableau) {
    let somme = 0;

    for (let i = 0; i < tableau.length; i++) {
        somme += tableau[i];
    }

    return somme;
}

function calculerMoyenne(tableau) {
    let somme = calculerSomme(tableau);

    return somme / tableau.length;
}

function trouverMaximum(tableau) {
    let max = tableau[0];

    for (let i = 1; i < tableau.length; i++) {
        if (tableau[i] > max) {
            max = tableau[i];
        }
    }

    return max;
}

let notes = [15, 12, 18, 11];

let moyenne = calculerMoyenne(notes);
let noteMax = trouverMaximum(notes);

console.log("=== CLASS REPORT ===");
console.log("Average: " + moyenne + " / 20");
console.log("Highest grade: " + noteMax + " / 20");