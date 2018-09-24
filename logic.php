<?php

session_start();

# Get `results` data from session, if available
if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $books = $results['books'];
    $searchTerm = $results['searchTerm'];
    $bookCount = $results['bookCount'];
}

#delete search term
session_unset();


