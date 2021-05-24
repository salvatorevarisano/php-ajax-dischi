<?php
// data 
require_once __DIR__ . '/database.php';
$artists = [];

foreach ($database as $album) {
    if(! in_array($album['author'], $artists)) {
        $artists[] = $album['author'];
    }
};



// export a json 
header('Content-Type: application/json');
echo json_encode($artists);