<!DOCTYPE html>
<html>
<body>

<?php  
  class Book {
    var $title;
    var $author;
    var $pages;
  }
  $book1 = new Book ;
  $book->title = "Harry Potter";
  $book->author = "JK Rowling";
  $book->pages = "400";

  echo $book1->title;

?>  

</body>
</html>