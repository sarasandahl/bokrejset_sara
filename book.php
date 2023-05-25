<?php

require 'classes/views/book-view.php';
require 'classes/db.php';
require 'classes/models/book-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$bookModel = new BookModel($pdo);
$bookView = new BookView();
$id = $_GET['post'];

// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';

// våran apps vyer här om book-tabellen!
$bookView->renderBook($bookModel->getBook($id));

include 'partials/footer.php';