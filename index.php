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

$plusGrand = 0;
$positionPlusGrand = 0;
$compteur =0;

do {
    $nombre = readline("Saisissez un nombre (saisie s'arrête à 0) : ");
    // Vérifier si la saisie est différente de zéro
    if($nombre !=0){
        $compteur ++;
        if($nombre > $plusGrand){
            $plusGrand = $nombre;
            $positionPlusGrand = $compteur;
        }
    }
} while ($nombre != 0);
if($plusGrand !== 0){
    echo "Le plus grand nombre saisi est : $plusGrand";
    print PHP_EOL;
    echo "Il a été saisi à la position : $positionPlusGrand";
} else {
    echo "Aucun nombre n'a été saisi.";
    print PHP_EOL;
}
// EXERCICES 9

?>