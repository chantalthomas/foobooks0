<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Foobooks0</title>
    <meta charset='utf-8'>
</head>
<body>
<h1>Foobooks0</h1>

<p>Foobooks is a small library of books. Search for your favorites</p>

<form method='GET' action='search.php'>
    <label>Search for a book by title
        <input type='text' name='searchTerm' value='<?php if (isset($searchTerm)) echo $searchTerm ?>'>
    </label>
    <input type='submit' value='search'>
</form>

<?php if(isset($searchTerm)): ?>
    You searched for <?=$searchTerm?>
<?php endif; ?>

<?php if(isset($bookCount) and $bookCount == 0): ?>
    No  Results Found
<?php endif; ?>

<?php if (isset($books)): ?>
    <ul class='books'>
        <?php foreach ($books as $title => $book): ?>
            <li class='book'>
                <div class='title'><?= $title ?></div>
                <div class='author'>
                    by <?= $book['author'] ?>
                </div>
                <img src='<?= $book['cover_url'] ?>' alt='Cover photo for the book <?= $title ?>'>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
</body>
</html>