<?php
// Import classes
require_once __DIR__ . '/../classes/product.php';

// Create books
$book1 = new Book('Omero', 'Odissea', 'Neri Pozza', 15);
$book2 = new Book('Miyamoto Musashi', 'Il Libro dei Cinque Anelli', 'Bur', 17);

// Create audiobook
$audio1 = new Audiobook('George Simenon', 'Il Mediterraneo in Barca', 'Adelphi', 5, 120, 'Luca Ward');
$audio2 = new Audiobook('J.K.Rowling', 'Harry Potter e il Calice di Fuoco', 'Salani', 4, 180, 'Giancarlo Giannini');