<?php

require 'classes/views/review-view.php';

require 'classes/db.php';
require 'classes/models/review-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';

// våran apps vyer här om books-tabellen!
$reviewView->renderAllRewievsAsList($reviewModel->getAllReviewsWithUsersAndBooks());

include 'partials/footer.php';