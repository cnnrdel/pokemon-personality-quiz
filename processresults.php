<?php

    // access the variables
    $music = $_POST['music'];
    $atmosphere = $_POST['atmosphere'];
    $pastime = $_POST['pastime'];
    $dining = $_POST['dining'];
    $expression = $_POST['expression'];

    // validate the data (make sure we have both of the answers to the questions)
    if ($music == 'unknown' || $atmosphere == 'unknown' || $pastime == 'unknown' || $dining == 'unknown' || $expression == 'unknown') {
        header('Location: index.php?error=missing+input');
    } else {
        // diagnose the character
        $data = array (
            'darkrai' => 0,
            'entei' => 0,
            'marill' => 0,
            'shaymin' => 0
        );

        $data[$music]++;
        $data[$atmosphere]++;
        $data[$pastime]++;
        $data[$dining]++;
        $data[$expression]++;

        // find max value

        $max = max($data);
        $pokemon = array_search($max, $data);

        // print $pokemon;

        // store the data in a file
        $filename = getcwd() . '/data/results.txt';
        $filedata = $pokemon . "\n";
        file_put_contents($filename, $filedata, FILE_APPEND);

        // drop a cookie on their computer keeping track of the
        // pokemon
        setcookie('pokemon', $pokemon);

        // send them to their result page
        // header("Location: results.php");
        header("Location: index.php");
    }




?>