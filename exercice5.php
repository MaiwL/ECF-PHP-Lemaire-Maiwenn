<?php
echo "          Tableau aléatoire";
echo "\n";
// Création d'un tableau qui choisis aléatoirement 10 nombres entre 20 et 100
$tab1=[];
for($i=0;$i<10;$i++){
    $tab1[$i]=rand(20,100);
}
$tmp = $tab1;
// Affiche le tableau 1
echo "TABLEAU 1 :";
echo "\n";
print_r ($tab1);
$tab2=[];

for($i=0;$i<10;$i++){
    $tab2[$i]=rand(20,100);
}
$tmp1=$tab2;
echo "\nTABLEAU 2 :";
echo "\n";
print_r($tab2);
echo "0. Quitter";
echo "\n1. Trier le tableau en ordre croissant et l'afficher";
echo "\n2. Trier le tableau en ordre décroissant et l'afficher";
echo "\n3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2.";
echo "\n4. Inverser le tableau 3";
$choix = readline("\nQue voulez-vous faire :". " ");
switch ($choix){
        case 0:
            echo "Au revoir";
            break;
        case 1 :
            asort($tab1);
            print_r($tab1);
            asort($tab2);
            print_r($tab2);
            break;
        case 2 :
            arsort($tab1);
            print_r($tab1);
            arsort($tab2);
            print_r($tab2);
            break;
        case 3:
            $tab = [] ;
            echo "TABLEAU 3 : \n";
            for($i = 0 ; $i <10 ; $i++)
            $tab3 = $tmp + $tmp1;
            print_r($tab3);
            break;
        case 4:
            arsort($tab3);
            print_r($tab3);

}
?>