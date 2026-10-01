let gr;
let atdc;
gr = 18;
atdc = 90;

if(gr >= 10 && atdc >=80){
    console.log('\x1b[32m%s\x1b[0m' , "PASS")
}
else{
    console.log('\x1b[31m%s\x1b[0m' ,"FAILD")
}