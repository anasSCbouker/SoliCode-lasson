function calculerSurface(longueur, largeur) {
    return longueur * largeur;
}

function estGrand(surface) {
    return surface >= 100;
}

let surfacePiece = calculerSurface(12, 10);
let grandePiece = estGrand(surfacePiece);

console.log("Calculated area: " + surfacePiece + " m²");
console.log("Large room: " + grandePiece);