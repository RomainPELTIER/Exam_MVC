<?php
class bookController{

    public function newBookAction(){
        require 'newBook.php';
    }
    public function formAction(){
        $bookManager = new BookManager();
        $book =  new Book(null, $_POST['book_name'], $_POST['book_autor']);
        var_dump($book);
        $bookManager->insertBook($book);
        var_dump($book);
        header('Location: http://localhost/EXAM_MVC_Romain_PELTIER/index.php?controller=default&action=home');
    }

    public function deleteBook($id) {
        $articleManager = new BookManager();
        $articleManager->deleteBook($id);
        header('Location: http://localhost/EXAM_MVC_Romain_PELTIER/index.php?controller=default&action=home');
    }
}
?>