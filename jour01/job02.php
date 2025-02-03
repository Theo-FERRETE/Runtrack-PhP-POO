<?php
class Operation {
    // Déclaration des attributs
    public $nombre1;
    public $nombre2;

    // création d'une instance de la classe
    public function __construct($nombre1 = 10, $nombre2 = 20) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Méthode addition() qui calcule la somme de nombre1 et nombre2
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Le résultat de l'addition est : " . $resultat;
    }
}

// classe Operation
$operation = new Operation();

// Affichage 
echo "Nombre 1 : " . $operation->nombre1 . "<br>";
echo "Nombre 2 : " . $operation->nombre2 . "<br>";

// méthode addition() pour afficher le résultat
$operation->addition();
?>
