<?php
require 'Book.php';
require 'Library.php';

$library = new Library();
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925, Genre::Novel, 218, 5);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960, Genre::Novel, 281, 8);
$library->addBook($book1);
$library->addBook($book2);

$mostBorrowed = $library->mostBorrowedBook();
if ($mostBorrowed) {
  echo "The most borrowed book is: " . $mostBorrowed->getTitle() . " with " . $mostBorrowed->getLoanCount() . " loans.";
} else {
  echo "No books in the library.";
}

$booksBefore2000 = $library->getBookYearBefore2000();
echo "\nBooks published before 2000:\n";

foreach ($booksBefore2000 as $book) {
  echo "- " . $book->getTitle() . " (" . $book->getAuthor() . ") published in " . $book->getYear() . "\n";
}
