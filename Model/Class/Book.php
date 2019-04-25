<?php

class Book extends bookManager
{
    private $id;

    public function __construct($id, $book_name, $book_autor)
    {
        $this->id = $id;
        $this->book_name = $book_name;
        $this->book_autor = $book_autor;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->book_name;
    }

    /**
     * @param mixed $book_name
     */
    public function setBookName($book_name)
    {
        $this->book_name = $book_name;
    }

    /**
     * @return mixed
     */
    public function getBookAutor()
    {
        return $this->book_autor;
    }

    /**
     * @param mixed $book_autor
     */
    public function setBookAutor($book_autor)
    {
        $this->book_autor = $book_autor;
    }
    private $book_name;
    private $book_autor;

    /**
     * Book constructor.
     * @param $id
     * @param $book_name
     * @param $book_autor
     */

}
?>