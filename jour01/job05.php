<?php
class Animal {
   
    public $age;
    public $prenom;

    // initialiser l'âge à 0 et le prénom 
    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    // Méthode qui fait vieillir l'animal en augmentant son âge de 1
    public function vieillir() {
        $this->age++;
    }

    // Méthode qui nomme l'animal
    public function nommer($nom) {
        $this->prenom = $nom;
    }
}

// Instanciation d'un objet Animal
$animal = new Animal();

// attribut "age" initial
echo "Âge initial de l'animal : " . $animal->age . "<br>";

// Faire vieillir l'animal 
$animal->vieillir();
echo "Âge de l'animal après vieillir : " . $animal->age . "<br>";

// Nommer l'animal et afficher le nom 
$animal->nommer("Fido");
echo "Nom de l'animal : " . $animal->prenom . "<br>";
?>
