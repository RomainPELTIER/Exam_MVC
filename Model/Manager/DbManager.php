<?php
class DbManager{

    protected $bdd;

    public function __construct($connec_host = 'localhost', $connec_dbname = 'Book', $connec_pseudo = 'root', $connec_mdp = '')
    {
        try
        {
            $this->bdd = new PDO('mysql:host='.$connec_host.';dbname='.$connec_dbname, $connec_pseudo, $connec_mdp);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}
?>