<?php include("config.php"); ?>
<?php include("header.php"); ?>
<?php



@ $db = new mysqli('localhost', 'root', '', 'testinguser');

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=lab1.php>Return to home page </a>");
    exit();
}

    #the mysqli_real_espace_string function helps us solve the SQL Injection
    #it adds forward-slashes in front of chars that we can't store in the username/pass
    #in order to excecute a SQL Injection you need to use a ' (apostrophe)
    #Basically we want to output something like \' in front, so it is ignored by code and processed as text

if (isset($_POST['username'], $_POST['userpass'])) {
    #with statement under we're making it SQL Injection-proof
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    
    #without function, so here you can try to implement the SQL injection
    #various types to do it, either add ' -- to the end of a username, which will comment out
    #or simply use 
    #' OR '1'='1' #
    #$uname = $_POST['username'];
    
    #here we hash the password, and we want to have it hashed in the database as well
    #optimally when you create a user (through code) you simply send a hash
    #hasing can be done using different methods, MD5, SHA1 etc.
    
    $upass = sha1($_POST['userpass']);
    
    
    $query = ("SELECT * FROM user WHERE username = '{$uname}' "."AND userpass = '{$upass}'");
       
    
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->store_result(); 
    
    #here we create a new variable 'totalcount' just to check if there's at least
    #one user with the right combination. If there is, we later on print out "access granted"
    $totalcount = $stmt->num_rows();
    
    
    
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="lab1__container">
            <?php
            
            
            
            if (isset($totalcount)) {
                if ($totalcount == 0) {
                    echo '<h2>You got it wrong. Can\'t break in here!</h2>';
                } else {
                    echo '<h2>Welcome! Correct password. <a href="fileUpload.php">  Here is the link </a> </h2>';
                }
            }
            ?>
            <form method="POST" action="">
                <input type="text" name="username">
                <input type="password" name="userpass">
                <input type="submit" value="Log in">
            </form>
            <ul id="imgList">
                <?php
                /*Added a loop that iterates through the img folder, and adds each element into the img list*/
                $dir = new DirectoryIterator("uploadedFiles");
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                    echo "<li><img src=\"uploadedFiles/" . $fileinfo->getFilename() . "\"></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
