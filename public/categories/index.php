<?php

/**
 * @file
 * Categories Main.
 */

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

use Hillel\Models\Category;

$categories = Category::all();

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */
echo $blade->make('categories.index', ['categories' => $categories])->render();
