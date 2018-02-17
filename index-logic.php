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

# Get search criteria from the form
$genre = $form->get('genre','');
$pageLimit = $form->get('pageLimit');
$ebooks = $form->has('ebooks');