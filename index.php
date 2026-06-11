<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Repositories\OmdbRepository;
use App\Services\MovieService;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;

$apiKey = 'cbd8e382';

$repository = new OmdbRepository(new Client(), new HttpFactory(), $apiKey);
$service    = new MovieService($repository);

$movie = $service->getMovieInfo('tt1041829');

print_r($movie);
