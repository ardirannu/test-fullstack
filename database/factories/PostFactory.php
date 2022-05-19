<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = Str::slug($title);

    return [
        'user_id' => $faker->numberBetween(1, User::count()),
        'title' => $title,
        'slug' => $slug,
        'content' => $this->faker->text(200),
    ];
});
