<?php

// bryggan mellan db och controller, Model
// kommunicerar med db CRUD
// ( innan har vi gjort en "Monster" som bara bär data men nu bär db data så... )

class BookModel extends DB {

    protected $table = "books";

    public function getAllBooks(){
        return $this->getAll($this->table);
    }
}