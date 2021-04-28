const myServer = 'http://localhost/php-ajax-dischi/server.php';

const app = new Vue ({
    el : '#app',
    data : {
        importedAlbums : '',
    },

    methods : {
        filtered(array){

        }

    },

    mounted() {
        axios
        .get(myServer)
        .then(result => {
            this.importedAlbums = result.data;
            console.log(this.importedAlbums);
        })
    }
})

Vue.config.devtools = true;
