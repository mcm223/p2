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
<body>
<div class="container-fluid" id="container">
    <h1 class="display-3">Blind Date with a Book</h1>
    <img src="images/me2.jpg" alt="Image of Matt" class="rounded-circle">
    <h2 class="display-4">How Does it Work?</h2>
    <div id="bio">
        <p>
            Enter your desired book traits below, and then hit search. The result will be a new book for you to try.
        </p>
    </div>
    <h2 class="display-4">Book Preferences:</h2>
    <?= $ebook ?>
    <form method='GET' action='index.php'>

        <label for='genre'>Select your preferred genre:</label>
        <select name='genre' id='genre'>
            <option value='all' <?= ($genre == 'all') ? 'selected' : '' ?>>Surprise Me!</option>
            <option value='scifi' <?= ($genre == 'scifi') ? 'selected' : '' ?>>Science Fiction</option>
            <option value='history' <?= ($genre == 'history') ? 'selected' : '' ?>>History</option>
            <option value='romance' <?= ($genre == 'romance') ? 'selected' : '' ?>>Romance</option>
            <option value='genfic' <?= ($genre == 'genfic') ? 'selected' : '' ?>>General Fiction</option>
            <option value='fantasy' <?= ($genre == 'fantasy') ? 'selected' : '' ?>>Fantasy</option>
        </select>

        <label>Specify your maximum length in pages:
            <input type='text' name='pageLimit' value='<?= ($pageLimit == '') ? 0 : $pageLimit ?>'>
        </label>

        <label><input type='checkbox' name='ebook' value='true' <?= ($ebook == 'true') ? 'checked' : '' ?>> Exclude books without ebook version?</label>

        <input type='submit' value='Get Me a Date!' class='btn btn-primary btn-sm'>

    </form>
</div>
</body>
</html>