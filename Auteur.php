<?php

class Auteur {
    private string $nom;
    private string $prenom;
   
    public function __construct(string $nom,string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getnom(): string {
        return $this->nom;
    }
    public function getprenom(): string {
        return $this->prenom;
    }
    
    public function setnom($nom) {
        $this->nom = $nom;
    }
    public function setprenom($prenom) {
        $this->prenom = $prenom;
    }

    
    public function __toString() {
       return "Livre de " . " " . $this->nom . " " .  $this->prenom;     
    }
    
       
}



?>