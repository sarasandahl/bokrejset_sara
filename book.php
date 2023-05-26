<?php

require 'classes/views/book-view.php';
require 'classes/db.php';
require 'classes/models/book-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo); //ska den vara här?
$bookModel = new BookModel($pdo);
$bookView = new BookView();
$id = $_GET['post'];

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här om book-tabellen!
$bookView->renderBook($bookModel->getBook($id));

include 'forms/book-review-form.php';

include 'partials/footer.php';