<?php

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $artist = getArtist($search);
    $artistName = $artist->response->docs[0]->band;
}

$artistId = getArtistId($artist);

$artistImages = getImages($artistId);
$image = $artistImages->images[0]->url;

function getArtistId($artist)
{
    return substr($artist->response->docs[0]->id, 1);
}

function getArtist(string $search)
{
    $url = "https://api.vagalume.com.br/search.art?q={$search}&limit=5";

    $opts = array(
        'http' => array(
            'method' => 'GET',
            'header' => 'Authorization: Token token=a557944dce075ae29f2c7e3cc509ff3d'
        )
    );
    $context = stream_context_create($opts);
    return json_decode(file_get_contents($url, false, $context));
};

function getImages(string $artistId)
{
    $url = "https://api.vagalume.com.br/image.php?bandID={$artistId}&limit=5&apikey=a557944dce075ae29f2c7e3cc509ff3d";

    return json_decode(file_get_contents($url));
};