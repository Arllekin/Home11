<?php

/**
 * @file
 * Posts Delete.
 */

use Hillel\Models\Post;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$category = Post::find($_GET['id']);
$category->delete();

header('Location: /posts');
