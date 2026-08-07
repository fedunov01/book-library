<?php

class BookCollection {

private $books = [];

public function addBook(Book $book) {
   $this->books[] = $book;
}
public function getAllBooks() {
    return array_map(function($book) {
        return $book->toArray();
    }, $this->books);
}
public function findById(int $id) {
    foreach ($this->books as $book) {
        if ($book->id === $id) {
            return $book;
        }
    }
    return null;
}
public function count() {
    return count($this->books);
}
}
