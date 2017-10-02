<head>
	<meta charset="UTF-8">
	<title>Bookclub</title>
	<link rel="stylesheet" href="lab1.css">
    <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
<div class="lab1__content">
<div class="lab1__content-header">
    <p class="lab1__header-title"> the book club</p>
    <div class="lab1__menu">
        <p> <a class="<?php echo ($current_page == 'lab1.php' || $current_page == '') ? 'selected' : NULL ?>" href="lab1.php"> Home </a> </p>
        <p> <a class="<?php echo $current_page == 'about.php' ? 'selected' : NULL ?>" href="about.php"> About us </a> </p>
        <p> <a class="<?php echo $current_page == 'browse.php' ? 'selected' : NULL ?>" href="browse.php"> Browse books </a> </p>
        <p> <a class="<?php echo $current_page == 'books.php' ? 'selected' : NULL ?>" href="books.php"> My books </a> </p>
        <p> <a class="<?php echo $current_page == 'contact.php' ? 'selected' : NULL ?>" href="contact.php"> Contact </a> </p>
         <p> <a class="<?php echo $current_page == 'SQLInjection.php' ? 'selected' : NULL ?>" href="SQLInjection.php"> Gallery </a> </p>
    </div>
</div>