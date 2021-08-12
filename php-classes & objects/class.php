<!DOCTYPE html>
<html>
<body>

<?php  
  class Book {
    var $title;
    var $author;
    var $pages;

  function __construct()
  {
    echo "New Book Created <br>";
  }
  }
  
  $book1 = new Book("mike") ;
  $book->title = "Harry Potter";
  $book->author = "JK Rowling";
  $book->pages = "400";

  $book2 = new Book("Tom") ;
  $book2->title = "Lord of the Rings";
  $book2->author = "Tolkiem";
  $book2->pages = "700";

  

?>  

</body>
</html>