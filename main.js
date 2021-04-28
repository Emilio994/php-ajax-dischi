const myServer = 'http://localhost/php-ajax-dischi/server.php';
const myFiltered = 'http://localhost/php-ajax-dischi/partials/filtered_albums.php'

const app = new Vue ({
    el : '#app',
    data : {
        importedAlbums : '',
        filter : '',
        artists : []
    },
    methods : {
        filtered(){
            if (this.filter === '') {
                axios
                .get(myServer)
                .then(result => {
                let myData = result.data;
                this.importedAlbums = myData;
                });
            }
            else {
                axios
                .get(myFiltered + '?filtro=' + this.filter)
                .then(result => {
                    let myData = result.data;
                    this.importedAlbums = myData;
                });
            }
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
