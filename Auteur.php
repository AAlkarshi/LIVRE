<?php

class Auteur {
    private string $nom;
    private string $prenom;
    private array $livres;
    
    public function __construct(string $nom,string $prenom, array $livres) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = $livres;
    }

    public function getnom(): string {
        return $this->nom;
    }
    public function getprenom(): string {
        return $this->prenom;
    }
    public function getlivres(): array {
        return $this->livres;
    }
    
    public function setnom($nom) {
        $this->nom = $nom;
    }
    public function setprenom($prenom) {
        $this->prenom = $prenom;
    }
    public function setlivres($livres) {
        $this->livres = $livres;
    }
    
    public function __toString() {
       return "Livre de " . " " . $this->nom . " " .  $this->prenom;     
    }
    
     public function AjoutLivre($livre){
        $this->livres[] = $livre;
    }
    
   
    public function afficherBibliographie() {
        foreach ($this->livres as $livre) {
             echo $livre->gettitre() . " " . "(".$livre->getanneedeparution().")" ." " . ":" . " ".
             $livre->getnbxdepages(). " " ."pages". " " .  "/" . " " . $livre->getprix() . "€"; 
             echo "<br>"; 
        }
    } 
    
}



?>