<?php

require 'classes/views/books-view.php';

require 'classes/db.php';
require 'classes/models/book-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo); //ska den vara här?
$bookModel = new BookModel($pdo);
$booksView = new BooksView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här om books-tabellen!
$booksView->renderAllBooksAsList($bookModel->getAllBooks());

include 'partials/footer.php';