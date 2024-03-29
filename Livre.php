<?php

class Livre {
    private string $titre;
    private int $nbxdepages;
    private int $anneedeparution;
    private float $prix;
    private Auteur $Auteur;
  
    public function __construct(string $titre,int $nbxdepages,int $anneedeparution,
                                float $prix,  Auteur $Auteur) {
                $this->titre = $titre;
                $this->nbxdepages = $nbxdepages;
                $this->anneedeparution = $anneedeparution;
                $this->prix = $prix;
                $this->Auteur = $Auteur;
                $this->Auteur->AjoutLivre($this);
    }

    public function gettitre(): string {
        return $this->titre;
    }
    public function getnbxdepages(): int {
        return $this->nbxdepages;
    }
    public function getanneedeparution(): int {
        return $this->anneedeparution;
    }
    public function getprix(): float {
        return $this->prix;
    }
    public function getAuteur(): Auteur {
        return $this->Auteur;
    }

    
    public function settitre($titre) {
        $this->titre = $titre;
    }
    public function setnbxdepages($nbxdepages) {
        $this->nbxdepages = $nbxdepages;
    }
    public function setanneedeparution($anneedeparution) {
        $this->anneedeparution = $anneedeparution;
    }
    public function setprix($prix) {
        $this->prix = $prix;
    }    
    public function setAuteur($Auteur) {
        $this->Auteur = $Auteur;
    }
    
   


 
    public function __toString() {
        return $this->gettitre() . "(" . $this->getanneedeparution() . ") " .":".$this->getnbxdepages()."pages".  "/" . " " . $this->getprix() . "€"; 
    }

 



}

    



?>