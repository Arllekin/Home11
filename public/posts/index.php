<?php

/**
 * @file
 * Posts Main.
 */

use Hillel\Models\Post;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$posts = Post::all();

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */

echo $blade->make('posts.index', ['posts' => $posts])->render();
