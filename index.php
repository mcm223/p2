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
    <form method='GET' action='search.php'>

        <label for='day'>Select your preferred genre:</label>
        <select name='day' id='day'>
            <option value='choose'>Choose one...</option>
            <option value='mon'>Science Fiction</option>
            <option value='tue'>History</option>
            <option value='wed'>Romance</option>
            <option value='thu'>General Fiction</option>
            <option value='fri'>Fantasy</option>
        </select>

        <label>Specify your maximum length in pages:
            <input type='text' name='searchTerm'>
        </label>

        <label><input type='checkbox' name='days[]' value='mon'>Should all results include ebook versions?</label>

        <input type='submit' value='Search'>

    </form>
</div>
</body>
</html>