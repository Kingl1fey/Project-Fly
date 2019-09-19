<html lang="fr">


<body>
    <?php

    include('utilities.php');
    include('header.php');

    $results = displayCars();

    ?>
    <main class="carpics">

        <section class="flexpics">
            <article class="all">
                <h2>Les voitures <span>disponibles</span></h2>
                <?php foreach ($results as $k) : ?>

                    <div class="view1">

                        <a href="index.car.php?idCar=<?= $k[0] ?>">
                            <img src="<?= $k['carPic'] ?>" alt="photo">

                            <p><span>"</span><?= $k['carName'] ?><span>"</span></p>

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