<?php
if (!isset($_POST['action'])) {
    header("Location: index.php"); /* Redirect browser to index page */
    die();
}
?>
<?php
// Connect to the database
if (!include('connect.php')) {
    die('error finding connect file');
}
$dbh = ConnectDB();
?>
<?php
$action = $_POST['action'];

if ($action == 'add_movie') {
    $mTitle = $_POST['title'];
    $mOverview = $_POST['overview'];
    $mPoster_path = $_POST['poster_path'];
    $mMood = $_POST['mood'];
    $mGenre = $_POST['genre'];

    $sql = "INSERT INTO movies (title, overview, poster_path, mood, genre)
    VALUES ('$mTitle', '$mOverview', '$mPoster_path', '$mMood', '$mGenre')";

    // Submit data
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
}
?>
