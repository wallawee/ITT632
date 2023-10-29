<!doctype html>
<html lang="en"> 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>
<body>
<?php require('action.php'); ?>
    <div class="container">
        <header>
            <h1><img src="razali.jpg" width="260" height="350"></h1>
            <h1><?php echo $name ?></h1>
        </header>
        <section class="info">
            <div class="center-content">
                <h2>About Me</h2>
                <p>Student ID: <?php echo $studentid ?></p>
                <p>IC: <?php echo $ic ?></p>
                <p>Gender: <?php echo $gender ?></p>
                <p>Hobby: <?php echo $hobby ?></p>
                <p>Address: <?php echo $address ?></p>
                <p>Age: <?php echo $age ?></p>
                <p>Email: <?php echo $email ?></p>
                <p>Phone: <?php echo $phone ?></p>
            </div>
        </section>
    </div>
</body>

</html>