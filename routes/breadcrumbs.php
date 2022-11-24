<?php // routes/breadcrumbs.php

use App\Models\User;
use App\Models\Post;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


//Admin
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Dashboard', route('admin'));
});


// Users
Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Users', route('users.index'));
});

// Users > Create User
Breadcrumbs::for('users.create', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('Create User', route('users.create'));
});

// Users > Show User
Breadcrumbs::for('users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users.index');
    $trail->push($user->name, route('users.show', $user));
});

// Users > Edit User
Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users.index');
    $trail->push($user->name, route('users.edit', $user));
});


// Posts
Breadcrumbs::for('posts.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Posts', route('posts.index'));
});

// Posts > Create Post
Breadcrumbs::for('posts.create', function (BreadcrumbTrail $trail) {
    $trail->parent('posts.index');
    $trail->push('Create Post', route('posts.create'));
});

// Posts > Show Post
Breadcrumbs::for('posts.show', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('posts.index');
    if($post->title != null){
        $trail->push($post->title, route('posts.show', $post));
    }
});

// Posts > Edit Post
Breadcrumbs::for('posts.edit', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('posts.index');
    if($post->title != null){
        $trail->push($post->title, route('posts.edit', $post));
    }
});



