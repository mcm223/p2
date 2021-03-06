<?php
/**
 * Book.php
 * Created by Susan Buck
 * https://github.com/susanBuck/foobooks0/blob/master/Book.php
 */

namespace DWA;

class Book
{
    // Changed this to protected so it's available to ProcessBook extension
    protected $books;

    public function __construct($dataFile)
    {
        $booksJson = file_get_contents($dataFile);
        $this->books = json_decode($booksJson, true);
    }

    public function getAll()
    {
        return $this->books;
    }

    public function getByTitle($title, $caseSensitive = false)
    {
        $results = [];
        foreach ($this->books as $bookTitle => $book) {
            if ($caseSensitive) {
                $match = $bookTitle == $title;
            } else {
                $match = strtolower($bookTitle) == strtolower($title);
            }
            if ($match) {
                $results[$bookTitle] = $book;
            }
        }
        return $results;
    }
}