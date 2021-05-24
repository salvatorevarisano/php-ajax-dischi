const app = new Vue ({
    el: '#app',
    data: {
        apiURL: window.location.href + 'data/db.php',
        albums: [],
        artists: [],
        filterArtist: 'all',
    },
    created() {

        axios.get(this.apiURL)
            .then(res => {
                console.log(res);
                this.albums = res.data.albums;
                this.artists = res.data.artists;
            }).catch(err => {
                console.log(err);
            })

    },

    methods: {
        getFiltered() {
            axios.get(this.apiURL, {
                params: {
                    artist: this.filterArtist,
                }
            })
            .then(res => {
                this.albums = res.data.albums;
            }).catch(err => {
                console.log(err);
            })
        }
    }
})