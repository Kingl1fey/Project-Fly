<html lang="fr">



<body>

    <?php
    include('utilities.php');
    include('header.php');
    ?>

    <main>

        <?php


        $results = displayCity();

        /*include('aside.conditions.php');*/
        ?>



        <section>

            <article>
                <?php foreach ($results as $k) : ?>

                    <div class="view hide">

                        <a href="index.destination.php?idDestination=<?= $k[0] ?>">
                            <img src="<?= $k['pictures'] ?>" alt="photo">

                            <p><?= $k['cityName'] ?></p>

                        </a>
                    </div>

                <?php endforeach; ?>

            </article>
            <?php include('aside.accueil.php'); ?>
        </section>


    </main>

    <script src="index.js"></script>

    <?php
    include('footer.php');
    ?>
</body>