<?php
// print"bonjour";
// for($compteur =1; $compteur<=10;$cpmpteurcompteur++){
//     print $compteur;
//     print PHP_EOL;
// }
// 1 EXERCICES :
// do{
//      Demander à l'utilisateur de saisir un nombre
//     echo "Veuillez saisir un nombre entre 1 et 3 : ";
//     $nombre = readline();
// }while($nombre<1 || $nombre>3);
// echo"Merci, vous avez saisi un nombre valide: $nombre\n";
// 2 EXERCICES :

// $nombre = 0;

// while ($nombre < 10 || $nombre > 20) {
//      Demander un nombre à l'utilisateur
//     $nombre = readline("Veuillez entrer un nombre entre 10 et 20 : ");

//     Vérifier si le nombre est trop grand
//     if ($nombre > 20) {
//         echo "Plus petit !\n";
//     }
//      Vérifier si le nombre est trop petit
//     elseif ($nombre < 10) {
//         echo "Plus grand !\n";
//     }
// }

// echo "Le nombre choisi est : $nombre\n";
//  EXERCICES 3
// Demander un nombre de départ à l'utilisateur
// $nombreDepart = intval(readline("Veuillez entrer un nombre de départ : "));

// Afficher les dix nombres suivants
// echo "Les dix nombres suivants sont :\n";
// for ($i = $nombreDepart + 1; $i <= $nombreDepart + 10; $i++) {
//     echo $i . "\n";
// }
/// EXERCICES 4
// $nombreDepart = intval(readline("Veuillez entrer un nombre de départ : "));
// echo "La table de multiplication de $nombreDepart est :\n";
// for ($i=1; $i <=10 ; $i++) {
//     $resultat = $nombreDepart * $i ;
//     echo "$nombreDepart x $i = $resultat\n";
// }
//EXERCICES 5
// $nombreDepart = intval(readline("Veuillez entrer un nombre de départ : "));
// $somme =0;
// for($i=1;$i<=$nombreDepart;$i++){
//     $somme += $i;
// echo "La somme des entiers jusqu'à $nombreDepart est : $somme\n";

// }
//EXERCICES 6
// Fonction pour calculer la factorielle
//
// function calculerFactorielle($nombre) {
//     if ($nombre < 0) {
//         return "La factorielle n'est définie que pour les entiers non négatifs.";
//     } elseif ($nombre == 0 || $nombre == 1) {
//         return 1;
//     } else {
//         $factorielle = 1;
//         for ($i = 2; $i <= $nombre; $i++) {
//             $factorielle *= $i;
//         }
//         return $factorielle;
//     }
// }

// Demander à l'utilisateur d'entrer un nombre
// echo "Entrez un nombre : ";
// $nombre = readline();

// $resultat = calculerFactorielle($nombre);

// echo "La factorielle de $nombre est $resultat.";

//EXERCICES 8
// initilaiser la valeur pour stocker le plus grand nombre
// $plusGrand = 0;
// $positionPlusGrand = 0;

// for ($i=1; $i <=5 ; $i++) {
//     $nombre = readline("Saisissez le nombre $i :");
//     if($nombre > $plusGrand){
//         $plusGrand = $nombre;
//         $positionPlusGrand = $i;
//     }
//     # code...
// }
// echo "Le plus grand nombre parmi les 20 nombres saisis est : $plusGrand\n";
// echo "Il a été saisi à la position : $positionPlusGrand\n";
// EXERCICES 9

// $plusGrand = 0;
// $positionPlusGrand = 0;
// $compteur =0;

// do {
//     $nombre = readline("Saisissez un nombre (saisie s'arrête à 0) : ");
//     Vérifier si la saisie est différente de zéro
//     if($nombre !=0){
//         $compteur ++;
//         if($nombre > $plusGrand){
//             $plusGrand = $nombre;
//             $positionPlusGrand = $compteur;
//         }
//     }
// } while ($nombre != 0);
// if($plusGrand !== 0){
//     echo "Le plus grand nombre saisi est : $plusGrand";
//     print PHP_EOL;
//     echo "Il a été saisi à la position : $positionPlusGrand";
// } else {
//     echo "Aucun nombre n'a été saisi.";
//     print PHP_EOL;
// }
// EXERCICES 9
// function calculateTotalMontant($purchases){
//     return array_sum ($purchases);
// }
// function simulateDiscount($totalAmount,$amountPaid){
//     $change = $amountPaid - $totalAmount;
//      Array of available bills
//     $bills = array(10, 5, 1);
//      Display the change to give
//     echo "Change to give :$change Euros";
//     print PHP_EOL;

//     foreach ($bills as $bill ) {
//         $billCount = intval($change / $bill);
//         $change %= $bill;
//         if($billCount > 0){
//             echo "$bill Euro(s): $billCount bill(s)";
//             print PHP_EOL;
//         }
//     }
// }
// echo "Enter the price of purchase (entre 0 to finish) ";
// print PHP_EOL;

// $purchases = array();
// do {
//     $price = intval(readline("Enter th price (in Euros): "));
//     if($price != 0){
//         $purchases[]= $price;
//     }
// } while ($price != 0);
// $totalAmount = calculateTotalMontant($purchases);
// echo "Total amounts owed :$totalAmount Euros";
// print PHP_EOL;
// $amountPaid = (int)readline("Enter the amount paid (in Euros) :");
// echo "Amount paid : $amountPaid Euros";
// print PHP_EOL;
// simulateDiscount(array_sum($purchases),$amountPaid );
// EXERCICES 10

function calculateWinningChances($totalHorses, $playedHorses)
{
    // Calculate factorials
    $factorialTotal = factorial($totalHorses);
    $factorialPlayed = factorial($playedHorses);
    $factorialRemaining = factorial($totalHorses - $playedHorses);

    // Calculate winning chances for each position
    $chancesThird = $factorialTotal / ($factorialRemaining * $factorialPlayed);
    $chancesQuarter = $factorialTotal / (($factorialPlayed * $factorialRemaining * 4) * $factorialRemaining);
    $chancesFifth = $factorialTotal / (($factorialPlayed * $factorialRemaining * 5) * $factorialRemaining);

    return [
        'Third' => $chancesThird,
        'Quarter' => $chancesQuarter,
        'Fifth' => $chancesFifth,
    ];
}

function factorial($n)
{
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Read user input for the number of horses
$totalHorses = intval(readline("Enter the total number of horses: "));
$playedHorses = intval(readline("Enter the number of horses played: "));

// Calculate and display winning chances
$chances = calculateWinningChances($totalHorses, $playedHorses);
echo "Chances of winning:\n";
echo "In Third: 1 in {$chances['Third']} chances\n";
echo "In Quarter: 1 in {$chances['Quarter']} chances\n";
echo "In Fifth: 1 in {$chances['Fifth']} chances\n";

?>