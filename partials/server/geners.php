<?php
include_once __DIR__ . '/db.php';

$genre = [];



foreach ($disco as $disc) {
    $currentGenre =  strtolower($disc['genre']);

    if (!in_array($currentGenre, $genre)) {
        $genre[] = $currentGenre;
    }
}


header('Content-Type: application/json');
echo json_encode(
    [
        'length' => count($genre),
        'result' => $genre,
    ]

);
