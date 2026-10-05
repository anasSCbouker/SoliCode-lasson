let cp = 0;
let sm = 0;

for(let nm = 1 ; nm <= 20 ; nm++){
    if(nm % 2 == 0){
        cp = cp + 1
        sm = sm + nm
    }
}
console.log("Even CP: " + cp )
console.log("Even SM: " + sm)