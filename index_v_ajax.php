<!-- Milestone 2: Attraverso l’utilizzo di AXIOS: al caricamento della pagina AXIOS chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VUEJS.
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
    <title>PHP Ajax Version Dischi</title>
</head>
<body>
    <!-- VUE App -->
    <div id="app">
        <!-- Header  --> 
        <header>
            <div class="logo">
                <img src="img/spotify_logo.png" alt="Logo">
            </div>
        </header>

        <!-- Main -->
        <main>
            <div  class="wrapper">
                <div v-for='album in importedAlbums' class="album_template">
                    <img :src='album.poster' alt="Poster">
                    <h4> {{ album.title }}</h4>
                    <p> {{ album.author }} </p>
                    <h5> {{ album.year }} </h5>
                </div>
            </div>
        </main>
    </div>
    <script src="main.js"></script>
    
    
</body>
</html>