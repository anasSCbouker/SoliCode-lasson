<?php
$articles = [
    [
        'id' => 1,
        'title' => 'How to Build UI Components with Atomic Design',
        'content' => 'Learn the basic ideas of Atomic Design.',
        'image' => 'article-example.png',
        'created_at' => '2026-02-14',
        'category' => 'Development',
        'category_color' => 'blue'
    ],
    [
        'id' => 2,
        'title' => 'Learning UX Micro-Interactions',
        'content' => 'Small actions can improve a website.',
        'image' => 'article-example.png',
        'created_at' => '2026-02-10',
        'category' => 'UI/UX Design',
        'category_color' => 'pink'
    ]
];

echo 'Article 1: ' . $articles[0]['title'] . ' (' . $articles[0]['category'] . ')<br>';
echo 'Article 2: ' . $articles[1]['title'] . ' (' . $articles[1]['category'] . ')';