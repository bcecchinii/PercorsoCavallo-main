<?php

    include_once 'conn.php';

    session_start();

    for($i=0;$i<count($_SESSION['campo']);$i++){
        for($j=0;$j<count($_SESSION['campo'][0]);$j++){
            if($i==0&&$j==0){
                $_SESSION['campo'][$i][$j] = 1;
            }else{
                $_SESSION['campo'][$i][$j] = 0;
            }
        }
    }

    $query = 'TRUNCATE TABLE PosizioniOccupate';
    mysqli_query($conn, $query);

    header("Location: index.php");