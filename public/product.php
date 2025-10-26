<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

$productId = isset($_GET['id']) ? (int)$_GET['id'] : 1;


$products = [
    [
        'id' => 1,
        'name' => 'IZDELEK 1',
        'subtitle' => 'Podnaslov izdelka 1',
        'image' => 'images/img.png',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 2,
        'name' => 'IZDELEK 2',
        'subtitle' => 'Podnaslov izdelka 2',
        'image' => 'images/img.png',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 3,
        'name' => 'IZDELEK 3',
        'subtitle' => 'Podnaslov izdelka 3',
        'image' => 'images/img.png',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 4,
        'name' => 'IZDELEK 4',
        'subtitle' => 'Podnaslov izdelka 4',
        'image' => 'images/img.png',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ],
    [
        'id' => 5,
        'name' => 'IZDELEK 5',
        'subtitle' => 'Podnaslov izdelka 5',
        'image' => 'images/img.png',
        'paragraphs' => [
            'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
            'Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ]
    ]
];


$product = null;
foreach ($products as $p) {
    if ($p['id'] === $productId) {
        $product = $p;
        break;
    }
}


if (!$product) {
    header('Location: index.php');
    exit;
}

echo $twig->render('product.html.twig', ['product' => $product]);