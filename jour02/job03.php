<?php
class Livre {
    // Attributs privés
    private $titre;
    private $auteur;
    private $nbPages;
    private $disponible;

    // initialiser les attributs
    public function __construct($titre, $auteur, $nbPages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        // appliquer la vérification sur nbPages
        $this->setNbPages($nbPages);
        // Le livre est disponible par défaut
        $this->disponible = true;
    }

    // (getters)
    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getNbPages() {
        return $this->nbPages;
    }

    // (setters)
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNbPages($nbPages) {
        // nombre de pages doit être  positif
        if (is_int($nbPages) && $nbPages > 0) {
            $this->nbPages = $nbPages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }

    // Méthode verification() qui retourne TRUE si le livre est disponible, FALSE sinon
    public function verification() {
        return $this->disponible;
    }

    // Méthode emprunter() qui rend le livre indisponible
    // On vérifie que le livre est disponible 
    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre '{$this->titre}' a été emprunté.<br>";
        } else {
            echo "Le livre '{$this->titre}' n'est pas disponible pour emprunt.<br>";
        }
    }

    // Méthode rendre() qui vérifie si le livre a été emprunté puis le rend disponible
    // Ici aussi, on se sert de la méthode verification() pour vérifier l'état du livre
    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre '{$this->titre}' a été rendu et est maintenant disponible.<br>";
        } else {
            echo "Le livre '{$this->titre}' n'était pas emprunté.<br>";
        }
    }
}

// Création d'un livre
$livre1 = new Livre("1984", "George Orwell", 328);

// Affichage de la disponibilité 
echo "Disponibilité initiale du livre '{$livre1->getTitre()}' : " . ($livre1->verification() ? "Disponible" : "Indisponible") . "<br>";

// Emprunter le livre
$livre1->emprunter();

// Vérifier la disponibilité après emprunt
echo "Disponibilité après emprunt du livre '{$livre1->getTitre()}' : " . ($livre1->verification() ? "Disponible" : "Indisponible") . "<br>";

// Tenter d'emprunter à nouveau le livre
$livre1->emprunter();

// Rendre le livre
$livre1->rendre();

// Vérifier la disponibilité après rendu
echo "Disponibilité après rendu du livre '{$livre1->getTitre()}' : " . ($livre1->verification() ? "Disponible" : "Indisponible") . "<br>";

// Tenter de rendre le livre à nouveau
$livre1->rendre();
?>
