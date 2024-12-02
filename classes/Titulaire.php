<?php

class Titulaire {

    private string $nom;
    private string $prenom;
    private DateTime $bdDate;
    private string $ville;
    private array $banques;




    public function __construct(string $nom, string $prenom, string $bdDate, string $ville,) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->bdDate = new DateTime ($bdDate);
        $this->ville = $ville;
        $this->banques = [];


}







    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of bdDate
     */ 
    public function getBdDate()
    {
        return $this->bdDate;
    }

    /**
     * Set the value of bdDate
     *
     * @return  self
     */ 
    public function setBdDate($bdDate)
    {
        $this->bdDate = $bdDate;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    
    /**
     * Get the value of banques
     */ 
    public function getBanques()
    {
        return $this->banques;
    }

    /**
     * Set the value of banques
     *
     * @return  self
     */ 
    public function setBanques($banques)
    {
        $this->banques = $banques;

        return $this;
    }
    


    public function  addCompte(Banque $banque) {
        return $this->banques[] = $banque ."<br>";
    }

    public function  afficherCompte()  {
        $result = "<h1>Comptes bancaires de $this</h1>";

        foreach($this->banques as $banque){

           $result.= $banque."<br>";
        }

        return $result;


    }







    public function __toString() {
        
        return $this->nom. " ".$this->prenom." (".$this->bdDate->format("d-m-Y").")";  
     }

} 