<?php

class Livre {
    private string $titre;
    private int $nbxdepages;
    private int $anneedeparution;
    private float $prix;
    private array $livres;
  
    public function __construct(string $titre,int $nbxdepages,int $anneedeparution,
                                float $prix,array $livres) {
                $this->titre = $titre;
                $this->nbxdepages = $nbxdepages;
                $this->anneedeparution = $anneedeparution;
                $this->prix = $prix;
                $this->livres = $livres;
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
    public function getlivres(): array {
        return $this->livres;
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
   public function setlivres($livres) {
        $this->livres = $livres;
    }
    


    public function afficherBibliographie($livres) {
        foreach ($livres as $livre) {
             echo $livre->gettitre() . " " . "(".$livre->getanneedeparution().")" ." " . ":" . " ".
             $livre->getnbxdepages(). " " ."pages". " " .  "/" . " " . $livre->getprix() . "€"; 
             echo "<br>"; 
        }
    } 

 
    public function __toString() {
        return $this->gettitre() . "(" . $this->getanneedeparution() . ") " .":".$this->getnbxdepages()."pages".  "/" . " " . $this->getprix() . "€"; 
    }

 



}

    



?>