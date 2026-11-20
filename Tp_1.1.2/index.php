
<?php

require_once __DIR__ . '/vendor/autoload.php';

use MathPro\Arithmetique\Calculatrice;
use MathPro\Trigonometrie\Trigonometrie;

// ==========================================
// TEST 1 : CALCULS ARITHMETIQUES
// ==========================================

echo "<h2>Calculs arithmétiques</h2>";

$calc = new Calculatrice(20, 5);

echo "Nombre 1 : " . $calc->getNombre1() . "<br>";
echo "Nombre 2 : " . $calc->getNombre2() . "<br>";

echo "Addition : " . $calc->addition() . "<br>";
echo "Soustraction : " . $calc->soustraction() . "<br>";
echo "Multiplication : " . $calc->multiplication() . "<br>";
echo "Division : " . $calc->division() . "<br>";
echo "Puissance : " . $calc->puissance() . "<br>";
echo "Racine carrée : " . $calc->racineCarree() . "<br>";

// ==========================================
// TEST 2 : GETTERS ET SETTERS
// ==========================================

echo "<h2>Test des getters et setters</h2>";

$calc->setNombre1(100);
$calc->setNombre2(20);

echo "Nouveau nombre 1 : " . $calc->getNombre1() . "<br>";
echo "Nouveau nombre 2 : " . $calc->getNombre2() . "<br>";
echo "Nouvelle addition : " . $calc->addition() . "<br>";

// ==========================================
// TEST 3 : CALCULS TRIGONOMETRIQUES
// ==========================================

echo "<h2>Calculs trigonométriques</h2>";

$trigo = new Trigonometrie(45);

echo "Angle : " . $trigo->getAngle() . " degrés<br>";

echo "Sinus : " . $trigo->sinus() . "<br>";
echo "Cosinus : " . $trigo->cosinus() . "<br>";
echo "Tangente : " . $trigo->tangente() . "<br>";

// ==========================================
// TEST 4 : METHODE STATIQUE
// ==========================================

echo "<h2>Conversion radians vers degrés</h2>";

echo "PI radians = "
    . Trigonometrie::radiansEnDegres(M_PI)
    . " degrés<br>";

// ==========================================
// TEST 5 : GESTION DES ERREURS
// ==========================================

echo "<h2>Gestion des erreurs</h2>";

try {
    $test = new Calculatrice(10, 0);

    echo $test->division();

} catch (\Throwable $e) {

    echo "Erreur : " . $e->getMessage();

}

?>
