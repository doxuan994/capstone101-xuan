<?php
// Connect to the database
if (!include('connect.php')) {
    die('error finding connect file');
}
$dbh = ConnectDB();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using TheMovieDB</title>
    <meta name="viewport" content="width=device-width">
    <!-- API version 3 documentation:
    https://developers.themoviedb.org/3/search
    https://developers.themoviedb.org/3/movies
    -->
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
</head>
<body>
    <h1>Using TheMovieDB.org API v3</h1>

    <h2>How do you feel today?</h2>
    <form method="POST" enctype="multipart/form-data" id="form_id">
        <input type="radio" name="mood" value="happy" id="happy"> Happy<br>
        <input type="radio" name="mood" value="sad" id="sad"> Sad<br>
        <input type="radio" name="mood" value="anger" id="anger"> Anger<br>
        <input type="radio" name="mood" value="calm" id="calm"> Calm<br>
        <input type="radio" name="mood" value="romantic" id="romantic"> Romantic<br>
        <input type="radio" name="mood" value="playful" id="playful"> Playful<br>
        <input type="radio" name="mood" value="confident" id="confident"> Confident<br>
        <input type="radio" name="mood" value="focus" id="focus"> Focus<br>
        <input type="button" name="submit_id" id="btn_id" value="Submit by Id" onclick="getConfig()"/>
    </form>

    <div id="output">
        <table id="myTable" style="width:100%">
            <tr>
                <th>Titles</th>
                <th>Overviews</th>
                <th>Avatars</th>
            </tr>
            <tr>
                <td id="fetch-title 0"></td>
                <td id="fetch-overview 0"></td>
                <td><img id="fetch-image 0"/></td>
            </tr>
            <tr>
                <td id="fetch-title 1"></td>
                <td id="fetch-overview 1"></td>
                <td><img id="fetch-image 1"/></td>
            </tr>
            <tr>
                <td id="fetch-title 2"></td>
                <td id="fetch-overview 2"></td>
                <td><img id="fetch-image 2"/></td>
            </tr>
            <tr>
                <td id="fetch-title 3"></td>
                <td id="fetch-overview 3"></td>
                <td><img id="fetch-image 3"/></td>
            </tr>
            <tr>
                <td id="fetch-title 4"></td>
                <td id="fetch-overview 4"></td>
                <td><img id="fetch-image 4"/></td>
            </tr>
        </table>
    </div>



    <!-- <div id="output-table">
        <table id="myTable" style="width:100%">
            <tr>
                <th>Titles</th>
                <th>Overviews</th>
                <th>Avatars</th>
            </tr>
            <tr>
                <td id="fetch-title 0"></td>
                <td id="fetch-overview 0"></td>
                <td><img id="fetch-image 0"/></td>
            </tr>
            <tr>
                <td id="fetch-title 1"></td>
                <td id="fetch-overview 1"></td>
                <td><img id="fetch-image 1"/></td>
            </tr>
            <tr>
                <td id="fetch-title 2"></td>
                <td id="fetch-overview 2"></td>
                <td><img id="fetch-image 2"/></td>
            </tr>
            <tr>
                <td id="fetch-title 3"></td>
                <td id="fetch-overview 3"></td>
                <td><img id="fetch-image 3"/></td>
            </tr>
            <tr>
                <td id="fetch-title 4"></td>
                <td id="fetch-overview 4"></td>
                <td><img id="fetch-image 4"/></td>
            </tr>
        </table>
    </div> -->


    <script type="text/javascript" src="js/key.js"></script>
    <script type="text/javascript" src="js/fetch_api_handling.js"></script>
</body>
</html>
