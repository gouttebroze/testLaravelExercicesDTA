<?php
namespace App;

    class Student {

        public $firstname; 
        
        public $lastname;

        public function __construct($firstname, $lastname) {

            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }


    }