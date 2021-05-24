<?php
require_once __DIR__ . '/database.php';

$artist = empty($_GET['artist']) ? false : $_GET['artist'];

// Get albums
$albums = [];
if($artist == false || $artist == 'all') {
    $albums = $database;

} else {
     foreach ($database as $album) {
        if($album['author'] == $artist) {
            $albums[] = $album; 
        }
    }
}

// Get artists
$artists = [];
foreach ($database as $album) {
    if(! in_array($album['author'], $artists) ) {
        $artists[] = $album['author'];
    }
}


//Result
$results = [
    'albums' => $albums,
    'artists' => $artists, 
];


// export a json
header('Content-Type: application/json');
echo json_encode($results);
