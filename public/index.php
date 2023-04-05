<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$author = 'Oscar Wilder';

echo $twig->render('home.html.twig', ['author' => $author]);
