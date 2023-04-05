<?php

require_once __DIR__ . '/../config/twig.php';




echo $twig->render('contact.html.twig', ['contact' => $contact]);