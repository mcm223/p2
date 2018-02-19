<?php
require 'helpers.php';
require 'index-logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blind Date with a Book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/p2_style.css">
</head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="http://p2.mcm223.me/">Blind Date with a Book</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://p2.mcm223.me/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/mcm223/p2" target='_blank'>GitHub</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Body -->
<div class='container-fluid' id='header'>
    <h1 class="display-3">Blind Date with a Book</h1>
    <img src="images/me2.jpg" alt="Image of Matt" class="rounded-circle">
</div>
<body>

<div class="container-fluid" id="container">

    <h4>How Does it Work?</h4>
    <div id="bio">
        <p>
            Enter your desired book traits below, and then hit search. The result will be a new book for you to try.
        </p>
    </div>
    <!-- Start user input section -->
    <h4>Book Preferences:</h4>

    <form method='GET' action='index.php'>
        <div class='form-group'>

            <label for='genre'>Select your preferred genre:</label>
            <select name='genre' id='genre' class='form-control'>
                <option value='all' <?= ($genre == 'all') ? 'selected' : '' ?>>Surprise Me!</option>
                <option value='scifi' <?= ($genre == 'scifi') ? 'selected' : '' ?>>Science Fiction</option>
                <option value='history' <?= ($genre == 'history') ? 'selected' : '' ?>>History</option>
                <option value='fiction' <?= ($genre == 'fiction') ? 'selected' : '' ?>>General Fiction</option>
                <option value='fantasy' <?= ($genre == 'fantasy') ? 'selected' : '' ?>>Fantasy</option>
            </select>
        </div>
        <div class='form-group'>
            <label>Specify your maximum length in pages:
                <input type='text' name='pageLimit' class='form-control'
                       value='<?= ($pageLimit == '') ? 0 : $pageLimit ?>'>
            </label>
        </div>
        <div class='form-group'>
            <label><input type='checkbox' class='form-check-input' name='ebook'
                          value='true' <?= ($ebook == 'true') ? 'checked' : '' ?>> Exclude
                books without ebook version?</label>
            <div id='submit'>
                <input type='submit' value='Get Me a Date!' class='btn btn-primary btn-md'>
            </div>
        </div>
    </form>

    <!-- Start output section -->
    <?php if ($form->hasErrors) : ?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else: ?>
        <?php if ($haveResults): ?>
            <div class='card'>
                <div class='card-header'>Your Blind Date Book Is:</div>
                <img class='card-img-top' src='<?= $potentialBooks[$output]['cover_url'] ?>'
                     alt='Cover photo for the book <?= $output ?>'>
                <div class='card-body'>
                    <h5 class='card-title'><?= $output ?></h5>
                    <p class='card-text'>by <?= $potentialBooks[$output]['author'] ?></p>
                    <a href='<?= $potentialBooks[$output]['purchase_url'] ?>' class='card-link' target='_blank'>Buy
                        me!</a>
                </div>
            </div>

        <?php elseif ($genre): ?>
            <div class='alert alert-danger'>Oops, no results! Try again with different criteria.</div>
        <?php endif; ?>

    <?php endif; ?>
</div>
</body>
</html>