const myServer = 'http://localhost/php-ajax-dischi/server.php';

const app = new Vue ({
    el : '#app',
    data : {
        importedAlbums : '',
        filter : '',
        artists : []
    },
    
    methods : {
        filtered(array){

        }

    },

    mounted() {
        axios
        .get(myServer)
        .then(result => {
            let myData = result.data;
            this.importedAlbums = myData;
            myData.forEach(element => {
                this.artists.push(element.author);               
            });
        })
    }
})

Vue.config.devtools = true;
