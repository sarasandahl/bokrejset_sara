<?php

// spindeln i nätet... Controller, tänk den del som "styr"

require 'classes/user-view.php';
// book-view
// review-view

require 'classes/db.php';
require 'classes/user-model.php';
// book dvs id, title, author
// review (innan userbook) dvs id, user_id, book_id, review_text, pages

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userModel = new UserModel($pdo);
$userView = new UserView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';

// våran apps vyer här
$userView->renderAllUsersAsList($userModel->getAllUsers());

include 'partials/footer.php';