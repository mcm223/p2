<?php

namespace DWA;

class ProcessBook extends Book
{
    # Return a list of books that match the search criteria
    public function getByTitle($genre, $pageLimit = 0, $ebook = false)
    {
        $results = [];

        foreach ($this->books as $bookTitle => $book) {

            # Does the genre match?
            if ($genre == 'all') {
                $match = true;
            } else {
                $match = $genre == $book['genre'];
            }

            # Does the book's length exceed the specified page limit
            if ($match && $pageLimit > 0) {
                $match = $book['length'] <= $pageLimit;
            }

            # Does the book need to have an ebook available?
            if ($match && $ebook) {
                $match = $ebook == $book['hasEbook'];
            }

            # If all of the above are true, then return the book as an option
            if ($match) {
                $results[$bookTitle] = $book;
            }
        }
        return $results;
    }
}