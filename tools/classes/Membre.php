<?php
    include("Date.php");
    class Membre{
        private $_idMembre;
        private $_nom;
        private $_prenom;
        private Date $_dateNaissance;
        private $_sexe;
        private $_mail;
        
        //get set
        public function setIdMembre($idmembre){
            $this->_idMembre=$idmembre;
        }
        public function getIdMembre(){
            return $this->_idMembre;
        }
        public function setNom($nom){
            $this->_nom=$nom;
        }
        public function setPrenom($prenom){
            $this->_prenom=$prenom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
        public function setDateNaissance(Date $datenaissance){
            $this->_dateNaissance=$datenaissance;
        }
        public function getDateNaissance(){
            return $this->_dateNaissance;
        }
        public function setSexe($sexe){
            $this->_sexe=$sexe;
        }
        public function getSexe(){
            return $this->_sexe;
        }
        public function setMail($mail){
            $this->_mail=$mail;
        }
        public function getmail(){
            return $this->_mail;
        }
        //constructor
        public function __construct($idmembre,$nom,$prenom,Date $datenaissance,$sexe,$mail){
            $this->setIdMembre($idmembre);
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setDateNaissance($datenaissance);
            $this->setSexe($sexe);
            $this->setMail($mail);
        }
    }
?>