<html lang="fr">


<body>

    <?php
    include('utilities.php');
    include('header.php');
    $results = detailsCars();
    ?>

    <main>


        <section id="carsdetails">

            <?php foreach ($results as $key) : ?>
                <h2 id="details">"<?= $key[1] ?>"</h2>
                <h3 id="carinfos"><?= $key['category'] ?> <?= $key['locPrice'] ?>€/Jour </h3>
                <img src="<?= $key['carPic'] ?>" alt="photo" id="carpic">
                <p>Disponible à <?= $key['cityName'] ?></p>
                <p>Pour voir la destination <a href="index.destination.php?idDestination=<?= $key[6] ?>">cliquez-ici</a> </p>
                <p id="toggle"><a href="index.conditions.php">Appelez-nous pour plus d'informations.</a></p>


            <?php endforeach; ?>

        </section>


    </main>

    <script src="index.js"></script>
    <div id="opacity">
    </div>
</body>
<?php
include('footer.php');
?>