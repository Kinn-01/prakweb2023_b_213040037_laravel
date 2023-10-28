<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => 'Gilman Arief Firmansyah',
        "email" => 'Gilmanarief23@gmail.com',
        "image" => 'panther.jpg'
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gilman Arief Firmansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum, veniam tenetur numquam odit temporibus doloremque impedit consequuntur culpa, sint nulla cumque nesciunt ipsum explicabo asperiores molestias aliquid quod incidunt quia ea neque harum commodi! Sed iure dicta ipsum eos quia atque magni dolorem, quaerat incidunt vel veritatis quisquam at voluptates, provident voluptatibus temporibus tempora doloribus illo repudiandae commodi ipsa corporis! Tempore, veniam fuga! Dicta sunt debitis, excepturi accusantium fuga enim delectus voluptatem maxime expedita facilis est vitae soluta voluptates."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Luthfi Amien",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum, veniam tenetur numquam odit temporibus doloremque impedit consequuntur culpa, sint nulla cumque nesciunt ipsum explicabo asperiores molestias aliquid quod incidunt quia ea neque harum commodi! Sed iure dicta ipsum eos quia atque magni dolorem, quaerat incidunt vel veritatis quisquam at voluptates, provident voluptatibus temporibus tempora doloribus illo repudiandae commodi ipsa corporis! Tempore, veniam fuga! Dicta sunt debitis, excepturi accusantium fuga enim delectus voluptatem maxime expedita facilis est vitae soluta voluptates."
        ]
        ];
   

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post

Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gilman Arief Firmansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum, veniam tenetur numquam odit temporibus doloremque impedit consequuntur culpa, sint nulla cumque nesciunt ipsum explicabo asperiores molestias aliquid quod incidunt quia ea neque harum commodi! Sed iure dicta ipsum eos quia atque magni dolorem, quaerat incidunt vel veritatis quisquam at voluptates, provident voluptatibus temporibus tempora doloribus illo repudiandae commodi ipsa corporis! Tempore, veniam fuga! Dicta sunt debitis, excepturi accusantium fuga enim delectus voluptatem maxime expedita facilis est vitae soluta voluptates."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Luthfi Amien",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cum, veniam tenetur numquam odit temporibus doloremque impedit consequuntur culpa, sint nulla cumque nesciunt ipsum explicabo asperiores molestias aliquid quod incidunt quia ea neque harum commodi! Sed iure dicta ipsum eos quia atque magni dolorem, quaerat incidunt vel veritatis quisquam at voluptates, provident voluptatibus temporibus tempora doloribus illo repudiandae commodi ipsa corporis! Tempore, veniam fuga! Dicta sunt debitis, excepturi accusantium fuga enim delectus voluptatem maxime expedita facilis est vitae soluta voluptates."
        ]
        ];

        $new_post = [];

        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
    
});