const app = new Vue(
    {
        el: "#app",
        data: {
            disco: [],

        },
        created() {
            axios.get('http://localhost/php-ajax-dischi/partials/server/controller.php').then(
                (result) => {
                    this.disco = result.data.result;
                    console.logo(result);
                }
            ).catch((error) => {
                console.warn(error)
            }
            );
        }
    }
)