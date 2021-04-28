<!-- Stampare a schermo i dischi musicali (vedi screenshot).
Oggi sarà da consegnare solo la prima Milestone, concentratevi esclusivamente su quella parte :slightly_smiling_face:
Milestone 1: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
<?php include __DIR__ .'/partials/database.php'; ?> 
<?php include __DIR__ .'/partials/header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>PHP Dischi</title>
</head>
<body>
    <!-- Header  -->
    <?php echo $myHeader ?>;    

    <!-- Main -->
    <main>
        <div class="wrapper">
            <?php foreach($database as $album) { ?>
            <div class="album_template">
                <img src=<?php echo $album['poster'] ?> alt="Poster">
                <h4><?php echo $album['title'] ?></h4>
                <p><?php echo $album['author'] ?></p>
                <h5><?php echo $album['year'] ?></h5>
            </div>
            <?php } ?>
        </div>
        
    </main>
    
</body>
</html>