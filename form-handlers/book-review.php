<?php

require_once 'classes/models/book-model.php';

$reviewModel = new ReviewModel(require '../partials/connect.php');

if (isset($_POST['review'])) {
    $title = filter_var($_POST['review'], FILTER_SANITIZE_SPECIAL_CHARS);
    $authorId = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $bookModel->addBook($title, $year, $authorId);
}

header("Location: ../books.php");