<?php

/**
 * Home Controller
 */

class Home extends Controller {

    public function __construct() {
        $this->bookModel = $this->model('book');
    }
    
    public function index() {
        $data = $this->bookModel->getBooks();
        $this->view('pages/index', $data);
    }

    public function new() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data   = [
                'title'     => trim($_POST['title']),
                'author'    => trim($_POST['author']),
                'ISBN'      => trim($_POST['ISBN']),
                'published' => trim($_POST['published']),
            ];

            if ($this->bookModel->addBook($data)) {
                header('Location: ' . URLROOT . '/home/index');
            } else {
                die('Failed to Add New Book');
            }

        } else {
            $data = [
                'title'     => '',
                'author'    => '',
                'ISBN'      => '',
                'published' => ''
            ];
        }

        $this->view('pages/create', $data);   
    }

    public function update($id="") {
        $book       = $this->bookModel;
        $book->id   = $id;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data   = [
                'id'        => $book->id,
                'title'     => trim($_POST['title']),
                'author'    => trim($_POST['author']),
                'ISBN'      => trim($_POST['ISBN']),
                'published' => trim($_POST['published']),
            ];

            if ($this->bookModel->updateBook($data)) {
                header('Location: ' . URLROOT . '/home/index');
            } else {
                die('Failed to Update Book');
            }

        } else {
            $query  = $this->bookModel->getBookById($book->id);
            $result = mysqli_fetch_array($query);

            $data   = [
                'id'        => $id,
                'title'     => $result['title'],
                'author'    => $result['author'],
                'ISBN'      => $result['ISBN'],
                'published' => $result['published']
            ];
        }

        $this->view('pages/update', $data);
    }

    public function delete($id="") {
        $book     = $this->bookModel;
        $book->id = $id;

        $data = [
            'id' => $book->id
        ];

        if ($this->bookModel->deleteBook($data)) {
            header('Location: ' . URLROOT . '/home/index');
        } else {
            die('Failed to Delete Book');
        }
    }
}