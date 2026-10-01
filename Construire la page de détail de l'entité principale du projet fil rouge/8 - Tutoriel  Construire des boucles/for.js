// we use "For" when we know how many times


for(let forNormal = 1; forNormal <= 10; forNormal++)
{
    console.log(forNormal);
}

console.log("\n");

for(let forNormalRevert = 10; forNormalRevert >= 1; forNormalRevert--)
{
    console.log(forNormalRevert);
}


console.log("\n");

for(let forIf = 1; forIf <= 10; forIf++){
    if(forIf % 2 == 0){
        console.log(forIf + " --> NM Even")
    }
    else{
        console.log(forIf + " --> NM Odd")
    }
}

console.log("\n");

for(let forIfRevert = 10; forIfRevert >= 1; forIfRevert--){
    if(forIfRevert % 2 == 0){
        console.log(forIfRevert + " --> NM Even")
    }
    else{
        console.log(forIfRevert + " --> NM Odd")
    }
}