<?php

// en View är en vy dvs den kod som skapar UI

class UserView {

    public function renderAllUsersAsList(array $users):void {
        echo "<ul>";
        foreach($users as $user){
            echo "<li>{$user['first_name']} {$user['last_name']}, Klass:{$user['class']}</li>";
        }
        echo "</ul>";
    }
}
