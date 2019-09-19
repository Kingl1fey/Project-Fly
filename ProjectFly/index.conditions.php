<html lang="fr">


<head>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9727a770ff.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <title>Project Fly</title>

</head>

<body>

    <?php
    include('utilities.php');
    include('header.php');
    ?>

    <main class="center">

        <?php


        $results = displayCity();


        ?>



        <section>
            <article>
                <?php foreach ($results as $k) : ?>

                    <div class="view hide">

                        <a href="index.destinations.php?idDestination=<?= $k[0] ?>">
                            <img src="<?= $k['pictures'] ?>" alt="photo">

                            <p><?= $k['cityName'] ?></p>

                        </a>
                    </div>

                <?php endforeach; ?>
            </article>
            <?php include('aside.conditions.php'); ?>
        </section>



    </main>

    <script src="index.js"></script>

</body>
<?php
include('footer.php');
?>