
function Autowritte(id, txt, speed) {
    let i = 0;
    setTimeout(
    function typWriter() {
        if (i < txt.length) {
            document.getElementById(id).innerHTML += txt.charAt(i);
            i++;
            setTimeout(typWriter, speed);
        }
    }, 1000)
}

let Bvnue = 'BIENVENUE SUR LE FORUM REALISE PAR CASIMIR & ANATOU ';
let txt1 = 'Lorem ipsum dummy text blafvsbla.';


setTimeout(Autowritte("demo", txt1, 50), 10);
setTimeout(Autowritte("demo1", Bvnue, 50), 10);

 
// for (let i = 0; i < 10; i++) {
//     document.getElementById('p1').innerHTML +=
//         'i stocke la valeur ' + i + ' lors du passage n°'
//         + (i + 1) + ' dans la boucle<br>';
// }


// let x = 0

// //Tant que...
// for (x = 0; x < 10; x++) {
//     //...exécute ce code
//     if(x==1){
   
//     };
//     if(x==3){
    
//     };
    
// }