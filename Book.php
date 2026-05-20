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
}
