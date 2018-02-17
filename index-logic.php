<?php
require 'Book.php';
require 'Forms.php';
/**
 * Created by PhpStorm.
 * User: Matt McGrath
 * Date: 2/17/18
 */

use DWA\Book;
#use DWA\Form;

# Instantiate a new book object
$book = new Book('books.json');