
Vous pouvez décider d'arrêter un script PHP avec les instructions die & exit:
breack
1. <?php
2. echo 'Ceci sera affiché';
3. 
4. die; // le script s'arrête ici
5. 
6. echo 'Cette ligne ne sera pas exécutée';
7. 

afficher un tableux
print_r($assoc);

push on array on php
$multidim['amis'][] = 'Pierre Ribaud';

declaration of constant 
const MA_CONSTANTE = "foo";

$calcul = 5 + 8;
define("MA_CONSTANTE", $calcul);

Incrémentation: $nb++
Décrémentation: $nb--



3. Opérateur de chaînes
4. La priorité des opérateurs
Cours

PHP procédural
3. Les opérateurs
2. Opérateurs logiques
Opérateurs logiques
On distinguera les opérateurs logiques suivants:

Opérateur	Exemple	true si ...
&&	$a && $b	$a ET $b sont truthy
||	$a || $b	$a OU $b est truthy
XOR	$a XOR $b	seul $a ou seul $b est truthy
!	!$a	$a est falsy


Opérateur	Exemple	Résultat	Comparaison de ...
==	5 == "5"	true	égalité (de valeur)
===	5 === "5"	false	égalité stricte (valeur & type)
!= ou <>	5 != "5"	false	différence (de valeur)
!==	5 !== "5"	true	différence stricte (valeur ou type)
<	5 < 5	false	infériorité
<=	5 <= 5	true	infériorité ou égalité
>	7 > 5	true	supériorité
>=	7 >= 5	true	supériorité ou égalité


L'opérateur de concaténation de PHP est le .

Concat on variable 

$who = 'World';
$hello = 'Hello ';
$hello .= $who;
$hello .= ' !'


file for gestion of errors 
php.ini
on file do tha
display_errors = on

php_ini_loaded_file().

Condition switch

    <?php
    $statut = "admin";
    switch ($statut) {
        case 'administrateur':  // si $statut == 'administrateur'
            echo 'Bienvenue sur le panneau de contrôle';
            break;
        case 'moderateur':      // si $statut == 'moderateur'
            echo 'Voici les cas nécessitant votre intervention:';
            break;
        default:                // sinon
            echo 'Bonjour !';
            break;
    }

    <?php
      $statut = "admin";
      switch ($statut) {
          case 'administrateur':
              // Ne s'exécute que pour l'administrateur 
              echo 'Bienvenue sur le panneau de contrôle';
              // Absence d'instruction break
          case 'moderateur':
              // Sexécute pour l'administrateur & le modérateur
              echo 'Voici les cas nécessitant votre intervention:';
              break;
      }

Conditions ternaire

//  condition ? si vraie    : si false
$foo = 5 < 10 ? 'inferieur' : 'superieur';

<?php
echo '5 est ' . (5 < 10 ? 'inférieur' : 'supérieur') . ' à 10';


function 
une_fonction($argument_1, $argument_2);

count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) : int


fonction intern

empty()

array empty
<?php
$arr = ['foo', 'bar', 'baz'];
var_dump(empty($arr));          // bool(false)


if the variable is defind 
var_dump(isset($arr));          // bool(false)
isset()


array_values()
<?php
$assoc = ['foo' => 'bar'];
print_r(array_values($assoc));
/*
Array
(
    [0] => bar
)
*/

loop For

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}


loop on array 
<?php
$arr = [
    'foo',
    'bar',
    'baz'
];
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br>';
}

remove array and set value
$arr = [
    'foo',
    'bar',
    'baz'
];
while ($item = array_shift($arr)) {
    echo $item . '<br>';
}

key value loop array
$assoc = [
    'a' => 'foo',
    'z' => 'bar',
    'e' => 'baz'
];
foreach ($assoc as $cle => $valeur) {
    echo $cle . ': ' . $valeur . '<br>';
}


Typage of function php 
function multiplier(int $nb_1, int $nb_2)


Typage of outpute

function multiplier(int $nb_1, int $nb_2) : int
{
    $resultat = $nb_1 * $nb_2;
    return $resultat;
}
Typage of outpute = null

function foo(?int $entier_ou_null) : ?int
{
    # code ...
}


SuperGlobal 
$_GET
echo $_GET['param'];

Create parms for a url

?php
$params = [
    'prenom' => 'John',
    'nom' => 'Doe',
];
// "prenom=John&nom=Doe"
$qs = http_build_query($params);
echo '<a href="profil.php?' . $qs . '">John Doe</a>';

send value at form whitee methode post

<!-- Formulaire de recherche -->

<form action="profil.php" method="post" enctype="multipart/form-data">
    <input type="file" name="profil">
    <input type="submit" name="upload">
</form>

Cookie 🍪
PHPSESSID


instruction	Erreur	Inclus un même fichier ...
include	Warning	toujours
include_once	Warning	1 seule fois
require	Fatal Error	toujours
require_once	Fatal Error	1 seule fois


methodes of object
$date->format("d/m/Y");

Méthodes statiques
Certaines propriétés & méthodes peuvent appartenir directement à la classe, notamment les constantes.
Pour accéder à ce qui appartient à la classe, utiliser le nom de la classe suivi de l'opérateur de résolution de portée :::

// Instantiation de DateTime avec une date au format particulier
$date = DateTime::createFromFormat("d.m.Y", "16.09.2018");


$pdo = new PDO(
    'mysql:host=localhost;dbname=ma_base;',
    'root',    // utilisateur MySQL
    'root',    // mot de passe
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
);

add value on php

$pdo->query(
    'INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) 
    VALUES ("Aymeric", "Mayeux", "m", "informatique", "2018-09-16", 500)'
);

$employe = $result->fetch(PDO::FETCH_ASSOC);

$result = $pdo->query("SELECT * FROM employes");
while ($employe = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>';
}

$requete = $pdo->prepare('SELECT * FROM employes WHERE nom = :marqueur')
$requete->bindValue(':marqueur', 'Thoyer');
// Exécution de la requête
$requete->execute();
$resultat = $requete->fetch(PDO::FETCH_ASSOC);