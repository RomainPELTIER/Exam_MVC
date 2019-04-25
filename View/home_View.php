<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma librairie</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<div>
    <h1>Bienvenu !</h1>
    <p>Derniers livres du moment :</p>
    <a href="http://localhost/EXAM_MVC_Romain_PELTIER/index.php?controller=book&action=newBook">
        <input class="favorite styled"
               type="button"
               value="Add book">
    </a>
            <p>
                <?php
                echo nl2br(htmlspecialchars($book->getBookName()));
                ?>
                <br/>
                <em><a href="http://localhost/EXAM_MVC_Romain_PELTIER/index.php?controller=book&action=delete&id=<?php echo $book->getId() ?>">Supprimer</a></em>
            </p>
        </div>
</body>
</html>