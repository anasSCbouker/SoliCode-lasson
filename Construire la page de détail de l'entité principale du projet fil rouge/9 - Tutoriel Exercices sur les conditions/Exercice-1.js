let gr = 21;
if(gr < 10){
    console.log('\x1b[31m%s\x1b[0m',"FAILD")
}
else if(gr >= 16 && gr <= 20){
    console.log('\x1b[32m%s\x1b[0m', "Your KING")
}

else if(gr > 20){
    console.log('\x1b[31m%s\x1b[0m', "ERROR")
}

else if(gr >= 10) {
    console.log('\x1b[32m%s\x1b[0m', "PASS")
}

else {
    console.log('\x1b[31m%s\x1b[0m', "ERROR")
}
