<header>
    <nav>
        <div class="container-fluid">
            <div class="row px-5">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <a href="#">
                        <img src="./img/Spotify_App_Logo.svg.png" alt="" width="50" height="50" />
                    </a>
                    <!--  <Genre /> -->
                    <section class="py-3 color-tertiary">
                        <label class="px-2" for="genre">Filtra per genere</label>
                        <select name="genre" id="genre" v-model="serchSelectGenre">
                            <option value="Tutte">
                                Tutte
                            </option>
                            <option value="Rock">
                                Rock
                            </option>
                            <option value="Pop">
                                Pop
                            </option>
                            <option value="Jazz">
                                Jazz
                            </option>
                            <option value="Metal">
                                Metal
                            </option>
                        </select>
                        <span class="px-3"></span>
                    </section>
                </div>
            </div>
        </div>
    </nav>
</header>