<html lang="fr">


<body>
    <?php

    include('utilities.php');
    include('header.php');

    $results = displayCity();

    ?>
    <main class="carpics">

        <section class="flexpics">
            <article class="all">
                <h2>Les destinations <span>disponibles</span></h2>
                <?php foreach ($results as $key) : ?>

                    <div class="view1">

                        <a href="index.destination.php?idDestination=<?= $key[0] ?>">
                            <img src="<?= $key['pictures'] ?>" alt="photo">

                            <p>"<span><?= $key['cityName'] ?></span>" à partir de : <span><?= $key['price'] ?>€</span></p>

                        </a>
                    </div>

                <?php endforeach; ?>
            </article>

        </section>

        <div id="opacity">
        </div>
    </main>

    <script src="index.js"></script>

    <?php
    include('footer.php');
    ?>
</body>