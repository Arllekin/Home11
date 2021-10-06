<?php

/**
 * @file
 * Posts Create.
 */

use Hillel\Models\Post;
use Hillel\Models\Tag;
use Hillel\Models\Category;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$categories = Category::all();
$tags = Tag::all();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $post = Post::create([
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'slug' => $_POST['slug'],
    'category_id' => $_POST['category_id'],
  ]);


  if (!empty($tags = $_POST['tags'])) {
    $post->tags()->sync($tags);
  }

  header('Location: /posts');
}

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */
echo $blade->make('posts.create', ['categories' => $categories, 'tags' => $tags])->render();
