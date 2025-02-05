<?php
class Student {
    // Attributs privés
    private $nom;
    private $prenom;
    private $studentNumber;
    private $credits;
    private $level;

    // initialise nom, prénom, numéro d'étudiant et les crédits (par défaut à 0)
    // Le niveau  est initialisé grâce à la méthode studentEval() 
    public function __construct($nom, $prenom, $studentNumber) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->studentNumber = $studentNumber;
        $this->credits = 0;
        $this->updateLevel();
    }

    // Mutateur pour ajouter des crédits
    // S'assure que la valeur passée est supérieure à zéro avant de l'ajouter
    public function add_credits($creditsToAdd) {
        if ($creditsToAdd > 0) {
            $this->credits += $creditsToAdd;
            // Mise à jour du niveau après modification du nombre de crédits
            $this->updateLevel();
        } else {
            echo "Erreur : Le nombre de crédits à ajouter doit être supérieur à zéro.<br>";
        }
    }

    // Accesseur pour obtenir le nombre total de crédits
    public function getCredits() {
        return $this->credits;
    }

    // Méthode privée qui retourne l'évaluation en fonction du nombre de crédits
    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // mettre à jour l'attribut level en privé
    private function updateLevel() {
        $this->level = $this->studentEval();
    }

    //  informations de l'étudiant publique
    public function studentInfo() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "Numéro d'étudiant : " . $this->studentNumber . "<br>";
        echo "Niveau : " . $this->level . "<br>";
        echo "Total de crédits : " . $this->credits . "<br>";
    }
}

// Instanciation de l'étudiant John Doe avec le numéro 145
$student = new Student("Doe", "John", 145);

// Ajout de crédits à trois reprises
$student->add_credits(30);
$student->add_credits(25);
$student->add_credits(10);

// Affichage de crédits
echo "Total de crédits pour l'étudiant : " . $student->getCredits() . "<br><br>";

// informations de l'étudiant
$student->studentInfo();
?>
