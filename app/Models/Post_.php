<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "First Post",
      "slug" => "firts-post",
      "author" => "John",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad iusto ipsum nobis dolorem dolores obcaecati cum quod et expedita optio distinctio, dolorum magni autem perferendis totam a. Veniam architecto ad incidunt aperiam nam omnis possimus. Magni explicabo quaerat incidunt tempore nam et odio tenetur voluptate nulla repudiandae, quo, magnam recusandae a optio nisi quae culpa neque dolore inventore vitae eaque! Praesentium fuga maiores autem doloribus quia aliquam incidunt delectus atque quod, magnam est molestiae ipsam, dolor dolore dolorum molestias."
    ],
    [
      "title" => "Second Post",
      "slug" => "second-post",
      "author" => "Doe",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad iusto ipsum nobis dolorem dolores obcaecati cum quod et expedita optio distinctio, dolorum magni autem perferendis totam a. Veniam architecto ad incidunt aperiam nam omnis possimus. Magni explicabo quaerat incidunt tempore nam et odio tenetur voluptate nulla repudiandae, quo, magnam recusandae a optio nisi quae culpa neque dolore inventore vitae eaque! Praesentium fuga maiores autem doloribus quia aliquam incidunt delectus atque quod, magnam est molestiae ipsam, dolor dolore dolorum molestias. Veniam architecto ad incidunt aperiam nam omnis possimus. Magni explicabo quaerat incidunt tempore nam et odio tenetur voluptate nulla repudiandae, quo, magnam recusandae a optio nisi quae culpa neque dolore inventore vitae eaque! Praesentium fuga maiores autem doloribus quia aliquam incidunt delectus atque quod, magnam est molestiae ipsam, dolor dolore dolorum molestias."
    ]
  ];

  public static function all() {
    return collect(self::$blog_posts);
  }

  public static function find($slug) {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }

};
