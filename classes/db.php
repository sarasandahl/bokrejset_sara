<?php

class DB {

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // fylla på med frågor mot databasen
    public function getAll($table)
    {
        $query = "SELECT * FROM $table";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //sql fråga här eller i book-model?
    /*public function getBook($id)
    {
        $query = "SELECT id FROM books WHERE $id == id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }*/
    

}
