<?php
class Book {
    public int $id;
    public string $title;
    public string $author;
    public int $year;
    public string $genre;

    public function __construct(int $id, string $title, string $author, int $year, string $genre) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'year' => $this->year,
            'genre' => $this->genre,
        ];
    }
}
?>
