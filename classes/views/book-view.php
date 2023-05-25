<?php

// en View är en vy dvs den kod som skapar UI

class BookView {

    public function renderBook($book):void {
        echo "<p>{$book['title']}, av: {$book['author']}, Utgivningsår: {$book['year']}, Om: {$book['blurb']}, ({$book['pages']} sidor)</p>";
    }

}
