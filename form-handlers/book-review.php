<?php

require '../classes/models/review-model.php';
$pdo = require '..partials/connect.php';

$reviewModel = new ReviewModel($pdo);

if(isset($_POST['bookId'], $_POST['userId'], $_POST['review'])) {
    $bookId = filter_var($_POST['bookId'], FILTER_SANITIZE_NUMBER_INT);
    $userId = filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT);
    $review = filter_var($_POST['review'], FILTER_SANITIZE_SPECIAL_CHARS);
    $reviewModel->addReview($bookId, $userId, $review);
}

header("Location: ../reviews.php");
