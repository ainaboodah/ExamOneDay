<?php
    Class Date{
        private $_date;
        private $_mounth;
        private $_year;
        //get set
        public function setDate($date){
            $this->_date=$date;
        }
        public function getDate(){
            return $this->_date;
        }
        public function setMounth($mounth){
            $this->_mounth=$mounth;
        }
        public function getMounth(){
            return $this->_mounth;
        }
        public function setYear($year){
            $this->_year=$year;
        }
        public function getYear(){
            return $this->_mounth;
        }
        //constructor
        public function __construct($year,$mounth,$date){
            $this->setDate($date);
            $this->setMounth($mounth);
            $this->setYear($year);
        }   
    }
?>