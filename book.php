<?php

require 'classes/book-view.php';
require 'classes/db.php';
require 'classes/book-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$bookModel = new BookModel($pdo);
$bookView = new BookView();
$id = $_GET['post'];
//$hardCodedID = "3";

// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';

// våran apps vyer här om books-tabellen!
$bookView->renderBook($bookModel->getBook($id));

include 'partials/footer.php';