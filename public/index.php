<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html.twig', ['name' => 'Tilen']);

$products = [
    [
        'id' => 1,
        'name' => 'Izdelek 1',
        'subtitle' => 'Podnaslov izdelka 1',
        'image' => 'images/product1.jpg',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 2,
        'name' => 'Izdelek 2',
        'subtitle' => 'Podnaslov izdelka 2',
        'image' => 'images/product2.jpg',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 3,
        'name' => 'Izdelek 3',
        'subtitle' => 'Podnaslov izdelka 3',
        'image' => 'images/product3.jpg',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 4,
        'name' => 'Izdelek 4',
        'subtitle' => 'Podnaslov izdelka 4',
        'image' => 'images/product3.jpg',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 5,
        'name' => 'Izdelek 5',
        'subtitle' => 'Podnaslov izdelka 5',
        'image' => 'images/product3.jpg',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 6,
        'name' => 'Izdelek 6',
        'subtitle' => 'Podnaslov izdelka 6',
        'image' => 'images/product3.jpg',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
            
        ]
    ],
];

echo $twig->render('index.html.twig', ['products' => $products]);

