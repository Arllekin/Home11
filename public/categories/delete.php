<?php

/**
 * @file
 * Categories Delete.
 */

use Hillel\Models\Category;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$category = Category::find($_GET['id']);
$category->delete();

header('Location: /categories');
