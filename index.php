<!-- Stampare a schermo i dischi musicali (vedi screenshot).
Oggi sarà da consegnare solo la prima Milestone, concentratevi esclusivamente su quella parte :slightly_smiling_face:
Milestone 1: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Milestone 2: Attraverso l’utilizzo di AXIOS: al caricamento della pagina AXIOS chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VUEJS.
Bonus: Attraverso un’altra chiamata AXIOS, filtrare gli album per artista -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <title>PHP Ajax Dischi</title>
</head>
<body>
    <!-- Header  -->
    <header>
        <div class="logo">
            <img src="img/spotify_logo.png" alt="Logo">
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class="wrapper">
            <?php 
                include __DIR__ .'/database.php'; 
                // var_dump($database);
                foreach($database as $album) { ?>
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