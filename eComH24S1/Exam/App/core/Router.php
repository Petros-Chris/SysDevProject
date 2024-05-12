<?php

use app\core\App;

// Define routes
App::router()->get('/', 'PostController@index');
App::router()->get('/create', 'PostController@create');
App::router()->post('/create', 'PostController@create');
App::router()->get('/edit/{postId}', 'PostController@edit');
App::router()->post('/edit/{postId}', 'PostController@edit');
App::router()->get('/delete/{postId}', 'PostController@delete');
App::router()->post('/delete/{postId}', 'PostController@delete');