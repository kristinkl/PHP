<?php include("config.php"); ?>
<?php include("header.php"); ?>

<div class="lab1__container">

<?php
$bookID = trim($_GET['bookID']);
echo '<INPUT type="hidden" name="bookID" value=' . $bookID . '>';

$bookID = trim($_GET['bookID']);      // From the hidden field
$bookID = addslashes($bookID);

@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
    
   echo $bookID;

    // Prepare an update statement and execute it
    $stmt = $db->prepare("UPDATE Book SET Reserved=0 WHERE BookID = ?");
    $stmt->bind_param('s', $bookID);
    $stmt->execute();
    printf("<br>Succesfully returned!");
    printf("<br><a href=browse.php>Search and Book more Books </a>");
    printf("<br><a href=books.php>Return to Reserved Books </a>");
    printf("<br><a href=lab1.php>Return to home page </a>");

?>

</div>
<?php include("footer.php"); ?>
</body>
