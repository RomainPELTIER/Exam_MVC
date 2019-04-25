<?php
include 'include.php';

if($_GET['controller'] === 'default' && $_GET['action'] == 'home') {
    $bookController = new DefaultController();
    $bookController->home();

}else if

($_GET['controller'] === 'book' && $_GET['action'] == 'newBook') {
    $bookController = new BookController();
    $bookController->newBookAction();

}else if

($_GET['controller'] === 'book' && $_GET['action'] == 'formBook') {
    $articleController = new BookController();
    $articleController->formAction();
}

else if

    ($_GET['controller'] === 'book' && $_GET['action'] == 'delete'){
        $articleController = new bookController();
        $articleController->deleteBook($_GET['id']);


}else {
    $exception = new Exception("La page demandée n'existe pas", 404);
    throw  $exception;
}
?>