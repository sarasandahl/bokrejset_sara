<?php

require_once '..classes/models/book-model.php';
require_once '..classes/models/user-model.php';

$bookModel = new BookModel(connect($host, $db, $user, $password));
$userModel = new UserModel(connect($host, $db, $user, $password));

//ska vara formulär till reviews
//ska in och hitta tillhörande bok och user
?>

 <form action="form-handlers/book-review.php" method="post">
    
    <div>
        <label for="book">Bok:</label>
        <select name="id" id="book">
            <option value="">--Välj bok--</option>
            <?php
            $books = $reviewModel->getAllBooks();
            foreach ($books as $book) {
                echo "<option value='{$book['id']}'>
                    {$book['title']}
                </option>";
            }?>
        </select>
    </div>
 
    <div>
        <label for="user">Bokrejsare:</label>
        <select name="id" id="user">
            <option value="">--Välj bokrejsare--</option>
            <?php
            $users = $userModel->getAllUsers();
            foreach ($users as $user) {
                echo "<option value='{$user['id']}'>
                    {$user['first_name']} {$user['last_name']}
                </option>";
            }?>
        </select>
    </div>
 
    <div>
        <label for="review"> Recenssion: </label>
        <input type="text" name="review" id="review">
    </div>

    <button type="submit">Skicka in</button>
</form>