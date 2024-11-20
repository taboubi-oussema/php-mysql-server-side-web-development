
<?php
class Etudiant
{
    private $nom_pre;
    private $niveau;
    private $inscription;
    private $Payement;

    function __construct($nom_pre, $niveau, $inscription, $Payement)
    {
        $this->nom_pre = $nom_pre;
        $this->niveau = $niveau;
        $this->inscription = $inscription;
        $this->Payement = $Payement;
    }

    function __toString()
    {
        return "Nom: $this->nom_pre, Niveau: $this->niveau, Inscription: $this->inscription, Payement: $this->Payement";
    }

    public function getNomPre()
    {
        return $this->nom_pre;
    }

    public function setNomPre($nom_pre)
    {
        $this->nom_pre = $nom_pre;
    }

    public function getNiveau()
    {
        return $this->niveau;
    }

    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    public function getInscription()
    {
        return $this->inscription;
    }

    public function setInscription($inscription)
    {
        $this->inscription = $inscription;
    }

    public function getPayement()
    {
        return $this->Payement;
    }

    public function setPayement($Payement)
    {
        $this->Payement = $Payement;
    }
}


?>