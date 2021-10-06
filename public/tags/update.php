<?php

/**
 * @file
 * Tags Update.
 */

use Hillel\Models\Tag;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $tag = Tag::find($_POST['id']);
  $tag->update(['title' => $_POST['title'], 'slug' => $_POST['slug']]);

  header('Location: /tags');
}
$data = [];

if (!empty($_GET['id'])) {
  $data['tag'] = Tag::find($_GET['id']);
}

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */
echo $blade->make('tags.update', $data)->render();
