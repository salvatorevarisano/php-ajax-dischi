const app = new Vue ({
    el: '#app',
    data: {
        apiURL: window.location.href + 'data/db.php',
        artistsApiURL: window.location.href + 'data/artists.php',
        albums: [],
        artists: [],
    },
    created() {

        const requestAlbums = axios.get(this.apiURL);
        const requestArtists = axios.get(this.artistsApiURL);
        axios.all([requestAlbums, requestArtists]).then(axios.spread((...
            responses) => {
                this.albums = responses[0].data;
                this.artists = responses[1].data;
            })).catch(errors => {
                console.log(errors);
            })

    },

    methods: {
    }
})