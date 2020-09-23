<?php
include 'db-dischi.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dist/app.css">
        <title>CD</title>
    </head>
    <body>
        <header>
            <div class="header-container">
                <img src="https://1000logos.net/wp-content/uploads/2017/08/Spotify-Logo.png" alt="Spotify-Logo">
            </div>
        </header>
        <main>
            <div class="cd-container">
                <?php foreach ($database as  $value) {?>
                        <div class="cd-card">
                            <img src="<?php echo $value['poster']; ?> " alt="">
                            <h3><?php echo $value['title']; ?></h3>
                            <small><?php echo $value['author']; ?></small>
                            <strong><?php echo$value['year']; ?></strong>
                        </div>
                    <?php
                } ?>
            </div>
        </main>
    </body>
</html>
