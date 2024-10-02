<?php

    include_once 'conn.php';
    session_start();

    $x = $_POST['coordinate'][0];
    $y = $_POST['coordinate'][2];

    $query = 'SELECT * FROM PosizioniOccupate ORDER BY time DESC';
    $result = mysqli_fetch_all(mysqli_query($conn, $query));

    $campo = $_SESSION['campo'];
    $xAttuale = $result[0][1];
    $yAttuale = $result[0][2];
    $campo[$xAttuale][$yAttuale] = 3;

    $query = 'INSERT INTO PosizioniOccupate (x, y) VALUES ('.$x.', '.$y.')';
    mysqli_query($conn, $query);

    $query = 'SELECT * FROM PosizioniOccupate ORDER BY time DESC';
    $result = mysqli_fetch_all(mysqli_query($conn, $query));
    $xNuova = $result[0][1];
    $yNuova = $result[0][2];
    $campo[$xNuova][$yNuova] = 1;

    $_SESSION['campo'] = $campo;

    header("Location: index.php");



