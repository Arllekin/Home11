<?php

/**
 * @file
 * Tags Main.
 */

use Hillel\Models\Tag;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$tags = Tag::all();

/**
 * For Blade.
 *
 * @var $blade \Illuminate\View\Factory
 */
echo $blade->make('tags.index', ['tags' => $tags])->render();
