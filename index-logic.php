<?php
require 'Book.php';
require 'Forms.php';

/**
 * Created by PhpStorm.
 * User: Matt McGrath
 * Date: 2/17/18
 */

use DWA\Book;
use DWA\Form;

# Instantiate book and form objects
$form = new Form($_GET);
$book = new Book('books.json');

# Variables
$potentialBooks = [];
$output = [];

# Get search criteria from the form
$genre = $form->get('genre', '');
$pageLimit = $form->get('pageLimit', 0);
$ebook = $form->has('ebook');

# Get a list of potential books
if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'pageLimit' => 'required|numeric'
        ]
    );
    if (!$form->hasErrors) {
        $potentialBooks = $book->getByTitle($genre, $pageLimit, $ebook);
        if (count($potentialBooks) > 0) {
            $haveResults = true;
            # Pick a random entry in the list of potential books
            $output = array_rand($potentialBooks);
        }
    }
}


