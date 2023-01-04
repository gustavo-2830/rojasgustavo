<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'title' => 'Gustavo Rojas - Web & Email Developer Freelancer',
    'description' => 'Web & Email developer freelancer with more than 8 years of experience helping businesses create compelling digital experiences with email marketing and websites.',
    'isIndexSelected' => function ($page) {
        return $page->getUrl() == 'http://localhost:3000/' ? 'text-white border-white' : 'text-gray-500 border-transparent hover:text-gray-300';
    },
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'text-white border-white' : 'text-gray-500 border-transparent hover:text-gray-300';
    },
    'collections' => []
];
