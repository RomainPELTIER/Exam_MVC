<?php

class bookManager extends DbManager{

    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()

    {   $books = [];
        $sql = 'SELECT * FROM book';
        var_dump($books);
        foreach  ($this->bdd->query($sql) as $row) {
            $books[] = new Book($row['id'], $row['book_name'], $row['book_autor']);
        }
        return $books;
    }

    public function insertBook(Book $book)
    {
        $query = "INSERT INTO `Book`
                        (`book_name`, `book_autor`) 
                VALUES   
                ('" . $book->getBookName() .
            "','" . $book->getBookAutor() .
            "')";
        $res = $this->bdd->prepare($query);
        $res->execute();
        $this->bdd->lastInsertId();
    }

    public function deleteBook($id){
        $query = "DELETE FROM `Book` WHERE `id` = ". $id;

        $res = $this->bdd->prepare($query);
        $res->execute();
    }

}
?>
