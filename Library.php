<?php
class Library
{
  private array $books;

  public function __construct()
  {
    $this->books = [];
  }

  public function addBook(Book $book)
  {
    $this->books[] = $book;
  }

  public function mostBorrowedBook(): ?Book
  {
    if (empty($this->books)) {
      return null;
    }

    $mostBorrowed = $this->books[0];
    foreach ($this->books as $book) {
      if ($book->getLoanCount() > $mostBorrowed->getLoanCount()) {
        $mostBorrowed = $book;
      }
    }
    return $mostBorrowed;
  }

  public function getBookYearBefore2000(): array
  {
    $booksBefore2000 = [];
    foreach ($this->books as $book) {
      if ($book->getYear() < 2000) {
        $booksBefore2000[] = $book;
      }
    }
    return $booksBefore2000;
  }
}
