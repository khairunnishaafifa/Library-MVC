<?php

/**
 * Book Model
 */

class Book {
        
    private $conn;

    public function __construct() {
        $this->conn = connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getBooks() {
        $sql        = "SELECT * FROM books ORDER BY id DESC";
        $result     = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function getBookById($id) {
        $sql        = "SELECT * FROM books WHERE id = $id";
        $result     = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function addBook($data) {
        $title      = $data['title'];
        $author     = $data['author'];
        $ISBN       = $data['ISBN'];
        $published  = $data['published'];

        $sql        = "INSERT INTO books (title, author, ISBN, published) VALUES ('$title', '$author', '$ISBN', '$published')";
        $result     = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result;            
        } else {
            echo "Error: " . $sql;
            echo mysqli_error($this->conn);
        }
    }

    public function updateBook($data) {
        $id         = $data['id'];
        $title      = $data['title'];
        $author     = $data['author'];
        $ISBN       = $data['ISBN'];
        $published  = $data['published'];

        $sql        = "UPDATE books SET title = '$title', author = '$author', ISBN = '$ISBN', published = '$published' WHERE id = $id";
        $result     = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result;            
        } else {
            echo "Error: " . $sql;
            echo mysqli_error($this->conn);
        }
    }

    public function deleteBook($data) {
        $id = $data['id'];

        $sql        = "DELETE FROM books WHERE id = $id";
        $result     = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result;            
        } else {
            echo "Error: " . $sql;
            echo mysqli_error($this->conn);
        }
    }
}