<?php

/**
 * @file
 * Tags delete.
 */

use Hillel\Models\Tag;

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$tag = Tag::find($_GET['id']);
$tag->delete();

header('Location: /tags');
