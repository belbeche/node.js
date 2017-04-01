
var a;
a = 3.14;
console.log(a);


var b = 0 // b contient la valeur 0 
b += 1; // b contient la valeur 1
b++; // b contient la valeur 2 
console.log(b); // Affiche 2

var e = 3 + 2 * 4; // e contient la valeur 11
e = (3 + 2) * 4; // e contient la valeur 20

var f = 200;
console.log("la variable f contient la valeur de"  + " "  + f);

var g = "test" * 2;
console.log(g);

var h = "5";
console.log(h + 1 ); // Cancaténation : affiche la chaîne "51"

h = Number("5")
console.log(h + 1 ); // Addition numérique : affiche le nombre 6

var prenom = prompt("Entrez votre prénom :");
alert("Bonjour, " + "" + prenom);


var saisie = prompt("Entrez votre âge: "); // saisie est de type chaine

var nb = Number(saisie); //nb est de type nombre 

Number(alert("Votre age : " + nb));

var sprenom = (prenom + nb); // je crée une variable global
alert("Bienvenue dans mon univers "  + ": " + sprenom); // j'affiche le résultat stoquer dans ces 2 variables



