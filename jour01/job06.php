<?php
class Personnage {
    // Attributs représentant la position du personnage 
    public $x;
    public $y;

    // initialise la position avec les valeurs 
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Déplace le personnage vers la gauche 
    public function gauche() {
        $this->y--;
    }

    // Déplace le personnage vers la droite 
    public function droite() {
        $this->y++;
    }

    // Déplace le personnage vers le haut 
    public function haut() {
        $this->x--;
    }

    // Déplace le personnage vers le bas 
    public function bas() {
        $this->x++;
    }

    // Retourne les coordonnées 
    public function position() {
        return "(" . $this->x . ", " . $this->y . ")";
    }
}


// Instanciation d'un personnage avec position initiale 
$perso = new Personnage(2, 3);
echo "Position initiale : " . $perso->position() . "<br>";

// Déplacement vers la gauche
$perso->gauche();
echo "Après déplacement à gauche : " . $perso->position() . "<br>";

// Déplacement vers la droite
$perso->droite();
echo "Après déplacement à droite : " . $perso->position() . "<br>";

// Déplacement vers le haut
$perso->haut();
echo "Après déplacement vers le haut : " . $perso->position() . "<br>";

// Déplacement vers le bas
$perso->bas();
echo "Après déplacement vers le bas : " . $perso->position() . "<br>";
?>
