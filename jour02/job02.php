<?php
class Livre {
    // Attributs privés
    private $titre;
    private $auteur;
    private $nbPages;

    // Constructeur pour initialiser les attributs
    public function __construct($titre, $auteur, $nbPages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        // Utilisation du setter pour appliquer la vérification
        $this->setNbPages($nbPages);
    }

    // Accesseurs (getters)
    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getNbPages() {
        return $this->nbPages;
    }

    // Mutateurs (setters)
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNbPages($nbPages) {
        // Vérifier que nbPages est un entier positif
        if (is_int($nbPages) && $nbPages > 0) {
            $this->nbPages = $nbPages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }
}

// Création d'un livre 
$livre = new Livre("1984", "George Orwell", 328);

// informations du livre
echo "Titre : " . $livre->getTitre() . "<br>";
echo "Auteur : " . $livre->getAuteur() . "<br>";
echo "Nombre de pages : " . $livre->getNbPages() . "<br>";

// modification avec une valeur incorrecte pour nbPages
$livre->setNbPages(-50);  // Affichera un message d'erreur

// Modification 
$livre->setNbPages(350);
echo "Nombre de pages modifié : " . $livre->getNbPages() . "<br>";
?>
