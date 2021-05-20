<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dischi php</title>
    <!-- style -->
    <link rel="stylesheet" href="./style/css/main.css">
</head>
<body> 
    <?php
    include __DIR__ . '/./partials/header.php';
    include __DIR__ . '/./partials/database.php';
    ?>
    <main>
        <div class="container">
            <?php foreach ($database as $disc) { ?>
               <div class="card">
                    <div class="poster">
                        <img src="<?php echo $disc['poster']?>" alt="<?php echo $disc['title']?>">
                    </div>
                    <h2><?php echo $disc['title']?></h2>
                    <div><?php echo $disc['author']?></div>
                    <div><?php echo $disc['year']?></div>
                    <div><?php echo $disc['genre']?></div>
                </div>
           <?php } ?> 
            
        </div>
    </main>
</body>
</html>