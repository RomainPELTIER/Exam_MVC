<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
<h1>Bienvenu !</h1>
<p>Ajouter un livre :</p>

<form action="index.php?controller=book&action=formBook" method="post">
    <div>
        <label for="name">Titre du livre</label>
        <input type="text" id="name" name="book_name">
    </div>
    <div>
        <label for="name">Nom de l'auteur</label>
        <input type="text" id="autor" name="book_autor">
    </div>
    <button class="favorite styled"
            type="submit"
            value="Add book">Envoyer</button>
</form>
</body>
</html>