var app = new Vue(
    {
        el: '#root',
        data: {
            url: 'http://localhost:8888/php-ajax-dischi/api.php',
            songs: []
        },
        methods: {
            getFaqsFromAPI() {
                axios.get(this.url)
                .then((response) => {
                    this.songs = response.data;
                });
            }
        },
        mounted() {
            this.getFaqsFromAPI();
        }
    }
);