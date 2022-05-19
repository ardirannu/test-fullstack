<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->numberBetween(1, Post::count()),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->domainName,
        'comment' => $this->faker->text(50),
    ];
});
