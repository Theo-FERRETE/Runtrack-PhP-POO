<?php

class Personne {
    // Attribut protégé
    protected $age;

    // initialise l'attribut "age" à 14 par défaut
    public function __construct() {
        $this->age = 14;
    }

    // Méthode afficherAge() qui affiche l'âge de la personne
    public function afficherAge() {
        echo "Age: " . $this->age . "<br>";
    }

    // Méthode bonjour() qui écrit "Hello" 
    public function bonjour() {
        echo "Hello<br>";
    }

    // Méthode modifierAge() permet de modifier l'âge de la personne
    public function modifierAge($nouvelAge) {
        $this->age = $nouvelAge;
    }
}

// Classe Eleve 
class Eleve extends Personne {
    
    // Méthode qui affiche "Je vais en cours"
    public function allerEnCours() {
        echo "Je vais en cours<br>";
    }

    // méthode afficherAge() pour afficher "J’ai XX ans"
    public function afficherAge() {
        echo "J’ai " . $this->age . " ans<br>";
    }
}

// Classe Professeur
class Professeur {
    
    private $matiereEnseignee;

    // initialise l'attribut "matiereEnseignee"
    public function __construct($matiere) {
        $this->matiereEnseignee = $matiere;
    }

    //  affiche "Le cours va commencer"
    public function enseigner() {
        echo "Le cours va commencer<br>";
    }
}

// Instanciation d'un objet Personne
$personne = new Personne();

// Instanciation d'un objet Eleve
$eleve = new Eleve();

// Affichage de l'âge de l'élève en console 
$eleve->afficherAge();
?>
