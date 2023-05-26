<?php

require 'classes/views/review-view.php';

require 'classes/db.php';
require 'classes/models/review-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);//ska den vara här?
$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här om books-tabellen!
$reviewView->renderAllRewievsAsList($reviewModel->getAllReviewsWithUsersAndBooks());

//recenssion tillhörande rätt bok

include 'partials/footer.php';