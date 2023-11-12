<?php



$title = 'My Blog :: About Me';

$post = ' <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, officia maiores a vel totam dolores voluptLorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, officia maiores a vel totam dolores voluptatum architecto pariatur minus, quam perferendis necessitatibus reprehenderit cum possimus dignissimos esse odatum architecto pariatur minus, quam perferendis necessitatibus reprehenderit cum possimus dignissimos esse odit dolorum autem!</p>
<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, officia maiores a vel totam dolores voluptatum architecto pariatur minus, quam perferendis necessitatibus reprehenderit cum possimus dignissimos esse odit dolorum autem!</p>
<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, officia maiores a vel totam dolores voluptatum architecto pariatuur adipisicing elit. Repudiandae, officia maiores a vel totam dolores vor minus, quam perferendis necessitatibus reprehenderit cum possimus dignissimos esse odit dolorum autem!</p>';

$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();

//$recent_posts = [
//    1 => [
//        'title' => 'An item',
//        'link' => str_replace(' ', '-', 'An item'),
//    ],
//    2 => [
//        'title' => 'A second item',
//        'link' => str_replace(' ', '-', 'A second item'),
//    ],
//    3 => [
//        'title' => 'A third item',
//        'link' => str_replace(' ', '-', 'A third item'),
//    ],
//    4 => [
//        'title' => 'A fourth item',
//        'link' => str_replace(' ', '-', 'A fourth item'),
//    ],
//    5 => [
//        'title' => 'And a fifth one',
//        'link' => str_replace(' ', '-', 'And a fifth one'),
//    ]
//
//    ];
require_once VIEWS . "/about.tpl.php";
?>
