<main>
    <section class="container">
        <div class="row pt-5">
            <div class="col-12 d-flex justify-content-center flex-wrap">

                <?php include __DIR__ . '/../server/db.php' ?>
                <?php foreach ($disco as $disc) { ?>
                    <figure class="m-3 text-center">
                        <a href="#" class="text-decoration-none">
                            <img class="p-2 prova" src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>" />
                            <h3 class="p-3"><?= $disc['title'] ?></h3>
                            <h4><?= $disc['author'] ?> </h4>
                            <h4> <?= $disc['year'] ?></h4>
                        </a>
                    </figure>
                <?php } ?>
            </div>
    </section>

</main>