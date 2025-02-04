<?php
class Rectangle {
    // Attributs 
    private $longueur;
    private $largeur;

    // initialiser la longueur et la largeur
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Accesseurs (getters)
    public function getLongueur() {
        return $this->longueur;
    }
    
    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateurs (setters)
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }
}

//  rectangle avec longueur 10 et largeur 5
$rectangle = new Rectangle(10, 5);

// Affichage des valeurs initiales
echo "Longueur initiale : " . $rectangle->getLongueur() . "<br>";
echo "Largeur initiale : " . $rectangle->getLargeur() . "<br>";

// Modification 
$rectangle->setLongueur(20);
$rectangle->setLargeur(15);

//  modifications
echo "Nouvelle longueur : " . $rectangle->getLongueur() . "<br>";
echo "Nouvelle largeur : " . $rectangle->getLargeur() . "<br>";
?>
