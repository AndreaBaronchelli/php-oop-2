<?php
// Create User Class
class User {
    // properties
    protected $name;
    protected $lastname;
    protected $age;
    protected $sale;
    
    // Constructor
    function __construct($name, $lastname, $age, $sale=0) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    // Methods
    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    protected function calcSale() {
        if ($this->age < 18 || $this->age > 65) {
            $this->sale = 10;
        } else {
            $this->sale = 5;
        }
    }

    public function getSale() {
        $this->calcSale();
        return $this->sale;
    }
};

// Create Premium User from User
class UserPremium extends User {
    // Properties
    protected $premium_level;

    // Constructor
    function __construct($name, $lastname, $age, $sale=0, $premium_level) {
        parent::__construct($name, $lastname, $age, $sale);
        $this->premium_level = $premium_level;
    }

    // Methods
    public function getLevel() {
        return $this->premium_level;
    }
    // sovrascittura
    protected function calcSale() {
        if ($this->premium_level > 0 && $this->premium_level < 6) {
            $this->sale = 15;
        } elseif ($this->premium_level > 6 && $this->premium_level < 11) {
            $this->sale = 20;
        } else {
            $this->sale = 25;
        }
    }
}