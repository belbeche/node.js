/*
 Exercice calcule de note 

var note = Number(prompt("Votre note Généréal : "));
var math = 5.10;
var anglais = 17.8;
var francais = 12.5; 

var total = note + math + anglais + francais;

console.log("Votre note est de : " + total );

argent 
bonheur 
travail 
famille

/*


/* Ton défault */ 
var utilisateur = String(prompt("Player"));

alert("Bonjour, " + utilisateur + " Tu va savoir si tout va bien\n" + "Ou pas");

alert("Donne un chiffre entre 0 et 20");

var question_1 = Number(prompt("En argent: "));

var reponse_1 = alert("En argent " + question_1);

var question_2 = Number(prompt("Et le bonheur dans tout sa ?"));

var reponse_2 = alert("En bonheur" + " " + question_2);

var question_3 = Number(prompt("Et concernant le travail ?"));

var reponse_3 = alert("Stay strong" + " " + question_3);

var question_4 = Number(prompt("Sinon comment va la famille ?"));

var reponse_4 = alert("Votre famille" + " " + question_4);

var questionPlus = question_1 + question_2 + question_3 + question_4;

var questionTotal = questionPlus * 20 / 100;

var memoireTotal =  questionTotal / 4; 

var showResult = memoireTotal + questionTotal;

alert("La moyenne de : " + utilisateur + "\n est de : " + showResult);

if (showResult < 9 )
{
	alert("Votre humeur ne vous convient pas " + "\n Tout comme vous j’essaie d'être meilleure que la veuille , courage ! :)");
}
else if(showResult >= 10 )
{
	alert("D’après nos calculs , vous êtes plutôt prêt(e) à vous amuser !!! " + " \n En avant " + " " +  utilisateur + "\n  pour une nouvelle L");
}
/*function restart() {
	if (value == "customs")
	{
		value = prompt("Repartir sur des bonne base ? \n qu'elle est ton souhait ?", "Clique");
	}
	else
	{
		return true
	}
*//*function change() {
  if(value == "custom") 
  {
    value = prompt("Please enter a new number:", "60");
  }
}*/




