<?php

/**
 * @file
 * Tags Create.
 */

use Hillel\Models\Tag;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  Tag::create([
    'title' => $_POST['title'],
    'slug' => $_POST['slug'],
  ]);
  header('Location: /tags');
}

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */
echo $blade->make('tags.create', [])->render();
