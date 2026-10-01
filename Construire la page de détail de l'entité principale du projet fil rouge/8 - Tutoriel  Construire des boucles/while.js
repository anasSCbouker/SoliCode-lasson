// we use "While" when we don't know how many times

let whileNormal = 1;
while(whileNormal <= 10){
    console.log(whileNormal)
    whileNormal++
}
console.log("\n")

let whileNormalRevert = 10;
while(whileNormalRevert >= 1){
    console.log(whileNormalRevert)
    whileNormalRevert--
}

console.log("\n")

let whileIf = 1;
while(whileIf <= 10){
    if(whileIf % 2 === 0){
        console.log(whileIf + " --> NM Even")
    }
    else{
        console.log(whileIf + " --> NM Odd")

    }
    whileIf++
}

console.log("\n")

let whileIfRevert = 10;
while(whileIfRevert >= 1){
    if(whileIfRevert % 2 === 0){
        console.log(whileIfRevert + " --> NM Even")
    }
    else{
        console.log(whileIfRevert + " --> NM Odd")

    }
    whileIfRevert--
}
