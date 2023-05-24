<?php

// en View är en vy dvs den kod som skapar UI

class BookView {

    public function renderAllBooksAsList(array $books):void {
        echo "<ul>";
        foreach($books as $book){
            echo "<li>{$book['title']} , av: {$book['author']} , Utgivningsår: {$book['year']} ({$book['pages']} sidor)</li>";
        }
        echo "</ul>";
    }
}
