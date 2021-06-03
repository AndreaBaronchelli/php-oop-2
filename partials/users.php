<?php 
// Import Classes
require_once __DIR__ . '/../classes/user.php';

// Create Users
$user1 = new User('Andrea', 'Baronchelli', 31);
$user2 = new User('Luca', 'Bianchi', 68);

// Create Premium Users
$premium1 = new UserPremium('Gianni', 'Giannotti', 43, 0 , 4);
$premium2 = new UserPremium('Carla', 'Carletti', 23, 0, 10);