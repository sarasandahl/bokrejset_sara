<?php

// en View är en vy dvs den kod som skapar UI

class BooksView {

    public function renderAllBooksAsList(array $books):void {
        echo "<ul>";
        foreach($books as $book){
            echo "<a href='book.php?post=".$book['id']."'><li>{$book['title']}, av: {$book['author']}</li></a>";
        }
        echo "</ul>";
    }
}
