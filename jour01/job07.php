<?php
class Cercle {
    // Attribut pour stocker le rayon
    private $rayon;

    // initialiser le rayon du cercle
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    // changer le rayon du cercle
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    //  retourne la circonférence du cercle
    // Formule : 2 * π * rayon
    public function circonference() {
        return 2 * pi() * $this->rayon;
    }

    //  retourne le diamètre du cercle
    // Formule : 2 * rayon
    public function diametre() {
        return 2 * $this->rayon;
    }

    // Méthode qui retourne l'aire du cercle
    // Formule : π * rayon²
    public function aire() {
        return pi() * pow($this->rayon, 2);
    }

    // affiche toutes les informations du cercle
    public function afficherInfos() {
        echo "Cercle de rayon : " . $this->rayon . "<br>";
        echo "Circonférence : " . $this->circonference() . "<br>";
        echo "Diamètre : " . $this->diametre() . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
    }
}

// Création de deux cercles avec des rayons différents
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage  pour le premier cercle
echo "<h2>Cercle 1</h2>";
$cercle1->afficherInfos();

echo "<br>";

// Affichage  pour le deuxième cercle
echo "<h2>Cercle 2</h2>";
$cercle2->afficherInfos();
?>
