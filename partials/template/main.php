<main>
    <section class="container">
        <div class="row pt-5">
            <div class="col-12 d-flex justify-content-center flex-wrap">


                <figure class="m-3 text-center " v-for="album in disco">
                    <a href="#" class="text-decoration-none">
                        <img class="p-2" :src="album.poster" :alt="album.title" />
                        <h3 class="p-3">{{album.title}}</h3>
                        <h4>{{album.author}} </h4>
                        <h4>{{album.year}}</h4>
                    </a>
                </figure>

            </div>
    </section>

</main>