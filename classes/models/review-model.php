<?php

class ReviewModel extends DB {
    protected $table = "reviews";
    public function getAllReviews()
    {
        return $this->getAll($this->table);
    }

    public function getAllReviewsWithUsersAndBooks() {   
        $query = "SELECT * FROM users JOIN reviews AS rv ON users.id=rv.userId JOIN books ON books.id=rv.bookId";
//        $sql = "SELECT books.title,books.year,authors.first_name,authors.last_name FROM books JOIN authors ON books.author_id=authors.id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //ska in och hitta tillhörande bok och user
    public function addReview(int $bookId, int $userId, string $review) {
        $query = "INSERT INTO {$this->table} (bookId,userId,review) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$bookId, $userId, $review]);
    }
}
