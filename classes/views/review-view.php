<?php

class ReviewView {

public function renderAllRewievsAsList(array $reviews):void {
    echo "<ul>";
    foreach($reviews as $review){
        echo "<li>{$review['title']}: <br>{$review['review']}, <br> Av: {$review['first_name']}{$review['last_name']}</li>";
    }
    echo "</ul>";
}
}
