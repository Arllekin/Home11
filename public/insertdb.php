<?php
//use Hillel\Models\Category;
//use Hillel\Models\Post;
//use Hillel\Models\Tag;
//
//$categories = [
//    [
//        'title' => 'fantasy',
//        'slug' => '/fan/',
//    ],
//    [
//        'title' => 'science-fiction',
//        'slug' => '/sci-fi/',
//
//    ],
//    [
//        'title' => 'detective',
//        'slug' => '/det/',
//    ],
//    [
//        'title' => 'historical novel',
//        'slug' => '/hist/',
//    ],
//    [
//        'title' => 'tragedy novel',
//        'slug' => '/trag/',
//    ],
//];
//
//$counterC = count($categories);
//for ($x = 0;$counterC>$x;$x++) {
//    $category_create = new Category();
//    $category_create->title = $categories[$x]['title'];
//    $category_create->slug =  $categories[$x]['slug'];
//    $category_create->save();
//}
//
//$category_update = Category::inRandomOrder()->first();
//$category_update->title = 'title_updated';
//$category_update->slug = '/title_updated/';
//$category_update->save();
//
//$category_delete = Category::inRandomOrder()->first()->delete();
//
//
//
//
//$Posts = [
//    [
//        'title' =>'post 1',
//        'slug' => 'p_1',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 2',
//        'slug' => 'p_2',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 3',
//        'slug' => 'p_3',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 4',
//        'slug' => 'p_4',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 5',
//        'slug' => 'p_5',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 6',
//        'slug' => 'p_6',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 7',
//        'slug' => 'p_7',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 8',
//        'slug' => 'p_8',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 9',
//        'slug' => 'p_9',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//    [
//        'title' =>'post 10',
//        'slug' => 'p_10',
//        'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nesciunt ullam vitae! Accusantium ad consequatur dolorum error et fugit id ipsam, iste, iure maiores, nam nulla praesentium quod sunt voluptate.</p>",
//        'category_id' => Category::all()->random()->id,
//    ],
//];
//
//$counterP = count($Posts);
//for($x=0;$x<$counterP;$x++) {
//    $post_create = new Post();
//    $post_create->title = $Posts[$x]['title'];
//    $post_create->slug = $Posts[$x]['slug'];
//    $post_create->body = $Posts[$x]['body'];
//    $post_create->category_id = $Posts[$x]['category_id'];
//    $post_create->save();
//}
//
//$post_update = Post::InRandomOrder()->first();
//$post_update->title = 'title_updated';
//$post_update->slug = '/slug updated/';
//$post_update->body = 'body updated';
//$post_update->category_id = Category::all()->first()->id;
//$post_update->save();
//
//$post_deleted = Post::InRandomOrder()->first()->delete();
//
//
//$Tags = [
//    [
//        'title' =>'battles',
//        'slug' =>'/battles/',
//    ],
//    [
//        'title' =>'dark',
//        'slug' =>'/dark/',
//    ],
//    [
//        'title' =>'mystic',
//        'slug' =>'/mystic/',
//    ],
//    [
//        'title' =>'epic',
//        'slug' =>'/epic/',
//    ],
//    [
//        'title' =>'strong_hero',
//        'slug' =>'/strong_hero/',
//    ],
//    [
//        'title' =>'violence',
//        'slug' =>'/violence/',
//    ],
//    [
//        'title' =>'becoming_hero',
//        'slug' =>'/becoming_hero/',
//    ],
//    [
//        'title' =>'romantic',
//        'slug' =>'/romantic/',
//    ],
//    [
//        'title' =>'tragedy',
//        'slug' =>'/tragedy/',
//    ],
//    [
//        'title' =>'happy_end',
//        'slug' =>'/happy_end/',
//    ],
//];
//
//$counterT = count($Tags);
//for ($x=0;$x<$counterT;$x++) {
//    $tag_create = new Tag();
//    $tag_create->title = $Tags[$x]['title'];
//    $tag_create->slug = $Tags[$x]['slug'];
//    $tag_create->save();
//}
//
//$tad_update = Tag::InRandomOrder()->first();
//$tad_update->title = 'tag updated';
//$tad_update->slug = 'slug updated';
//$tad_update->save();
//
//$tag_deleted = Tag::InRandomOrder()->first()->delete();
//
//$tags = Tag::all();
//$posts = Post::all();
//foreach ($posts as $postsC) {
//    $tag_id = $tags->pluck('id')->random(3);
//    $postsC->tags()->sync($tag_id);
//}

