<?php


class DefaultController{
    public function home(){
        $bookManager = new bookManager();
        $book = $bookManager->selectAll();

        require 'View/home_View.php';
    }
}
?>