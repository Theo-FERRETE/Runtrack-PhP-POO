<?php
class Operation {
    // Déclaration des attributs
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 10, $nombre2 = 20) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
}

// Classe opération
$operation = new Operation();

// Affichage 
echo "Nombre 1 : " . $operation->nombre1 . "<br>";
echo "Nombre 2 : " . $operation->nombre2 . "<br>";
?>
