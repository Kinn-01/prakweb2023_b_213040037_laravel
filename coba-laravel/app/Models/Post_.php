<?php

namespace App\Models;



class post
{
   private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
