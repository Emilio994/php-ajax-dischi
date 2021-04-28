Vue.config.devtools = true;
const myServer = 'http://localhost/php-ajax-dischi/server.php';

const app = new Vue ({
    el : '#app',
    data : {
        importedAlbums : '',

    },

    methods : {

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
