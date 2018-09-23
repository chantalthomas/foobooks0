<?php

$bookJsons = file_get_contents('books.json');

$books = json_decode($bookJsons, true);



