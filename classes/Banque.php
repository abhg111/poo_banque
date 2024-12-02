<?php

class Banque {


    private string $libelle;
    private string $soldeInt;
    private string $devise;
    private string $titulaireUnic;
    private Titulaire $titulaire;



public function __construct(string $libelle, string $soldeInt, string $devise, string $titulaireUnic, Titulaire $titulaire) {

           $this->libelle= $libelle;
           $this->soldeInt= $soldeInt;
           $this->devise= $devise;
           $this->titulaireUnic = $titulaireUnic;
           $this->titulaire = $titulaire;
           $this->titulaire->addCompte($this);


}
    







    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of soldeInt
     */ 
    public function getSoldeInt()
    {
        return $this->soldeInt;
    }

    /**
     * Set the value of soldeInt
     *
     * @return  self
     */ 
    public function setSoldeInt($soldeInt)
    {
        $this->soldeInt = $soldeInt;

        return $this;
    }

    /**
     * Get the value of devise
     */ 
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set the value of devise
     *
     * @return  self
     */ 
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get the value of titulaireUnic
     */ 
    public function getTitulaireUnic()
    {
        return $this->titulaireUnic;
    }

    /**
     * Set the value of titulaireUnic
     *
     * @return  self
     */ 
    public function setTitulaireUnic($titulaireUnic)
    {
        $this->titulaireUnic = $titulaireUnic;

        return $this;
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */ 
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

   
     
    public function crediter($amount , $compte) {
        $compte->soldeInt += $amount;
        return "Crediter $amount de ce compte $this->libelle. New balance: $this->soldeInt € </br>";
    }


    public function debiter($amount) {
            $this->soldeInt -= $amount;
            return "Deposit $amount into account $this->libelle. New balance: $this->soldeInt € </br>";
        }



    public function virement($amount, $compte){
            $this->debiter($amount);
            $this->crediter($amount ,$compte);

            return "Transfer $amount into account $this->libelle. New balance: $this->soldeInt € </br>";
        }




    public function __toString() {
        
        return $this->libelle. " ".$this->soldeInt." ".$this->devise." " .$this->titulaireUnic;  
     }









}