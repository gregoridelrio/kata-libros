<?php
require 'Genre.php';

class Book
{
  private string $title;
  private string $author;
  private int $year;
  private Genre $genre;
  private int $pages;
  private int $loanCount;

  public function __construct(string $title, string $author, int $year, Genre $genre, int $pages, int $loanCount)
  {
    $this->title = $title;
    $this->author = $author;
    $this->year = $year;
    $this->genre = $genre;
    $this->pages = $pages;
    $this->loanCount = $loanCount;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getLoanCount(): int
  {
    return $this->loanCount;
  }
}
