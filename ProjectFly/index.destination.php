<html lang="fr">


<body>

    <?php
    include('utilities.php');
    include('header.php');
    ?>

    <main class="center">

        <?php



        $results = detailsCity();


        ?>



        <section id="destination">
            <article>
                <?php foreach ($results as $key) : ?>

                    <h2 id="detailstitle">"<?= $key[1] ?>"</h2>
                    <div class="slidepics">
                        <ul id="slides">
                            <li id="img1">
                                <img src="<?= $key[4] ?> " alt="photo ">
                            </li>
                            <li id="img2" class="hidden">
                                <img src="<?= $key[5] ?> " alt="photo ">
                            </li>
                            <li id="img3" class="hidden">
                                <img src="<?= $key[6] ?> " alt="photo ">
                            </li>
                        </ul>
                    </div>
                </article>
                <aside id="destinationaside">
                    <h5 id="littletitle">Voiture disponible dans ce lieu : <?= $key[7] ?></h5>
                    <a href="index.car.php?idCar=<?= $key[9] ?>">
                        <img src="<?= $key[14] ?>" alt="car" id="car">
                    </a>
                    <p> <?= $key[8] ?></p>
                    <p id="toggle"><a href="index.conditions.php">Appelez-nous pour plus d'informations.</a></p>
                </aside>
            </section>



        <?php endforeach; ?>






    </main>

    <script src="index.js"></script>
    <div id="opacity1">
    </div>
</body>
<?php
include('footer.php');
?>