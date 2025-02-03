<?php
class Personne {
    // Attributs de la classe
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode SePresenter() qui retourne une présentation de la personne
    public function SePresenter() {
        return "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . ".";
    }
}

// Instanciation de plusieurs personnes
$personne1 = new Personne("Doe", "John");
$personne2  = new Personne("Dupont", "Jean");

// Appel de la Fonction
echo $personne1->SePresenter() . "<br>";
echo $personne2->SePresenter() . "<br>";
echo $personne3->SePresenter() . "<br>";
?>
