<?php

require 'classes/book-view.php';

require 'classes/db.php';
require 'classes/book-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$bookModel = new BookModel($pdo);
$bookView = new BookView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';

// våran apps vyer här om books-tabellen!
$bookView->renderAllBooksAsList($bookModel->getAllBooks());

include 'partials/footer.php';