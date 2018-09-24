<?php

session_start();

require 'helpers.php';

#Get data from form request
$searchTerm = $_GET['searchTerm'];

#Load book data
$booksJsons = file_get_contents('books.json');
$books = json_decode($booksJsons, true);

#Filter book data according to search term
foreach ($books as $title => $book){
    if($title != $searchTerm){
        unset($books[$title]);
    }
}

#store data in the session
$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'books' => $books,
    'bookCount' => count($books)
];

#redirect back to the form
header('Location: index.php');