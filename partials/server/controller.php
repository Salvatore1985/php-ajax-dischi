<?php
include_once __DIR__ . '/db.php';

$genre = [];


if (!empty($_GET) && !empty($_GET['genre'])) {
    $queryGenre = strtolower($_GET['genre']);
    foreach ($disco as $disc) {
        $currentGenre =  strtolower($disc['genre']);

        if ($currentGenre == $queryGenre) {
            $genre[] = $disc;
            /*  array_push($genre, $disc); */
        }
    }
} else {
    $genre = $disco;
}


header('Content-Type: application/json');
echo json_encode(
    [
        'length' => count($genre),
        'result' => $genre,
    ]

);
