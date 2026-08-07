<?php
require_once __DIR__ . '/src/Book.php';
require_once __DIR__ . '/src/BookCollection.php';

$bookCollection = new BookCollection();

$book1 = new Book(1, '1997', 'J. K. Rowling', 1949, 'Fantasy');
$book2 = new Book(2, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Fiction');
$book3 = new Book(3, 'Atlas Shrugged', 'Ayn Rand', 1957, 'Philosophical Fiction');

$bookCollection->addBook($book1);
$bookCollection->addBook($book2);
$bookCollection->addBook($book3);

echo "<pre>";
print_r($bookCollection->getAllBooks());
echo "\n\n";
print_r($bookCollection->findById(2));
echo "\n\n";
print_r("There is " . $bookCollection->count() . " books in the collection.");
echo '</pre>';