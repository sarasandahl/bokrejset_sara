<?php

require 'classes/views/user-view.php';
// book-view
// review-view

require 'classes/db.php';
require 'classes/models/user-model.php';
// book dvs id, title, author
// review (innan userbook) dvs id, user_id, book_id, review_text, pages

$pdo = require 'partials/connect.php';

$db = new DB($pdo);//ska den vara här?
$userModel = new UserModel($pdo);
$userView = new UserView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här
?>

<h1>VÄLKOMNA TILL BOKREJSET</h1>
<p>Läs en bok, samla sidor och tävla mot dina vänner. 
    <br>Bli en bokrejsare!</p>

<?php

//$userView->renderAllUsersAsList($userModel->getAllUsers());
// gör om för tre tabeller!

include 'partials/footer.php';