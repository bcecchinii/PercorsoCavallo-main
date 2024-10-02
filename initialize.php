<?php

    include_once "conn.php";

    function impostaPosizioneIniziale(&$matriceCampo, $conn){
        $matriceCampo[0][0] = 1;
        $query = 'INSERT INTO PosizioniOccupate (x, y) VALUES (0, 0)';
        mysqli_query($conn, $query);
    }

    $matriceCampo = array(
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0)
    );

    impostaPosizioneIniziale($matriceCampo, $conn);