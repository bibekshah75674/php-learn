<?php
// 1. Write PHP code to create an object of a class named "Book" with properties like
// title, author, and publication year.

class Book{
    public $title;
    public $author;
    public $publicationYear;

    public function __construct($title,$author,$publicationYear){
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }
}

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
echo "Title: " . $book1->title . "<br>";
echo "Author: " . $book1->author . "<br>";
echo "Publication Year: " . $book1->publicationYear . "<br>";
?>
