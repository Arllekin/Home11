<?php

/**
 * @file
 * Posts Update.
 */

use Hillel\Models\Post;
use Hillel\Models\Tag;
use Hillel\Models\Category;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$data = [];
$categories = Category::all();
$tags = Tag::all();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $post = Post::find($_POST['id']);
  $post->update(
      [
        'title' => $_POST['title'],
        'slug' => $_POST['slug'],
        'body' => $_POST['body'],
        'category_id' => $_POST['category_id'],
      ]);

  if (!empty($tags = $_POST['tags'])) {
    $post->tags()->sync($tags);
  }

  header('Location: /posts');
}

if (!empty($_GET['id'])) {
  $data['post'] = Post::find($_GET['id']);
}

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */
echo $blade->make('posts.update', $data, ['categories' => $categories, 'tags' => $tags])->render();
