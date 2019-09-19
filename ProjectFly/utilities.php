<?php

function displayCity()
{

    $pdo = new PDO('mysql:host=localhost;dbname=projectfly', 'root', 'georgie');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->query("SELECT * FROM destination");

    $resultat = $query->fetchAll();

    return $resultat;
}


function detailsCity()
{

    $pdo = new PDO('mysql:host=localhost;dbname=projectfly', 'root', 'georgie');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare("SELECT * FROM destination as d JOIN cars as c ON d.carName = c.carName
    WHERE idDestination =:destination");

    $query->execute([':destination' => $_GET['idDestination']]);


    $resultat = $query->fetchAll();

    return $resultat;
}

function displayCars()
{

    $pdo = new PDO('mysql:host=localhost;dbname=projectfly', 'root', 'georgie');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->query("SELECT * FROM cars");

    $resultat = $query->fetchAll();

    return $resultat;
}
function detailsCars()
{

    $pdo = new PDO('mysql:host=localhost;dbname=projectfly', 'root', 'georgie');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare("SELECT * FROM cars as c JOIN destination as d ON c.carName = d.carName
    WHERE idCar =:car");

    $query->execute([':car' => $_GET['idCar']]);


    $resultat = $query->fetchAll();

    return $resultat;
}
