const app = new Vue ({
    el: '#app',
    data: {
        apiURL: window.location.href + 'data/database.php',
        albums: [],
    },
    created() {
        axios.get(this.apiURL)
            .then((response) => {
                this.albums = response.data;
    
            })
            .catch((error) => {
                console.log(error);
            })

    },
    methods: {
    }
})