let str = "";
for(let nm = 1; nm <= 10 ; nm++){
    str = str + "*";
 console.log(str);
}

console.log("\n")

for (let sp = 1; sp <= 10 ; sp++){
    let str = "";
    for (let n = 1 ; n <= sp ; n++){
        str = str + "*";
    }
    console.log(str);
}

console.log("\n")


for (let sp = 1; sp <= 5; sp++) {
    let str = "";
    for ( n = 1; n <= 5 - sp; n++) {
        str = str + " ";
    }
    for (let e = 1; e <= (2 * sp) - 1; e++) {
        str = str + "*";
    }
    console.log(str);
}