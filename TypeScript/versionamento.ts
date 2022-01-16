const valores = Array(10, 11, 16, 20, 54, 22, 8, 2);
let total = 0;
// tslint:disable-next-line:prefer-for-of
for (let index = 0; index < valores.length; index++) {
    const element = valores[index];
    // console.log(index % 2);
    if (index % 2 === 1) {
        total += element;
    }
    // console.log("total " + total);
}
console.log("Total: " + total);

//0
//10 - 10
//16 - 26
//8  - 34

//1
//11
//54


//2
//16
//22

//10, 11, 16, 20, 54, 22, 8, 2
//  , 11,   , 31,   , 52,  , 55 