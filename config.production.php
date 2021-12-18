<?php

return [
    'production' => true,
    'baseUrl' => 'https://rojasgustavo.com',
    'isIndexSelected' => function ($page) {
        return $page->getUrl() == 'https://rojasgustavo.com/' ? 'text-white border-white' : 'text-gray-500 border-transparent hover:text-gray-300';
    },
];
