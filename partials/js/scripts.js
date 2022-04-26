const app = new Vue(
    {
        el: "#app",
        data: {
            disco: [],
            genre: '',
            genres: [],

        },
        created() {
            this.getDiscs();
            this.getGeners();

        },
        computed: {

        },

        methods: {

            getDiscs() {
                console.log(this.genre);
                axios.get('http://localhost/php-ajax-dischi/partials/server/controller.php?genre=' + this.genre).then(
                    (result) => {
                        this.disco = result.data.result;
                        /*  console.log(this.disco); */


                    }
                ).catch((error) => {
                    console.warn(error)
                }
                );
            },
            getGeners() {
                axios.get('http://localhost/php-ajax-dischi/partials/server/geners.php').then(
                    (result) => {
                        this.genres = result.data.result;
                        /*   console.logo(result); */

                    }
                ).catch((error) => {
                    console.warn(error)
                }
                );
            }

        }
    }
)