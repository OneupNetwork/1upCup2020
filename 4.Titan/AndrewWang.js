/**
 * Accepted (Practice)
 * 93 ms 	12020 KB
 * Jul/24/2020 17:54UTC+8
 */
const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.on('line', (input) => {
    //console.log(input);
    //ar = input.split(' ');


    let a = Math.floor(input / 2);
    let b = input - a;
    let ar = a.toString().split("")

    let total = 0;
    let ten = 0;

    for (let i = ar.length - 1; i>0; i--) {
        let fix = 9 - parseInt(ar[i], 10);
        ar[i] = 9;
        b -= fix * (Math.pow(10, ten));
        ten++;
    }
    let br = b.toString().split("")

    ar.forEach(elem => {
        total += parseInt(elem, 10);
    });
    br.forEach(elem => {
        total += parseInt(elem, 10);
    });

    console.log(total);

    rl.close();
});