<?php
require_once __DIR__ . '/../autoload.php';

use App\Models\Article;
use App\Models\User;

//$art = Article::findAll();
//var_dump($art);
//echo '<br><br>';
//$us = User::findAll();
//var_dump($us);
//var_dump(Article::findById(9));
//var_dump(Article::findById(9000));

////test public function insert() of abstract class Model
//$artcl = new Article();
//$artcl->title = 'The title: test insert method';
//$artcl->content = 'The content: test insert method';
//var_dump($artcl->insert());die;

////test public function insert() of abstract class Model
//$artcl = new User();
//$artcl->email = 'insert@test.com';
//$artcl->password = 'test_insert';
//var_dump($artcl->insert());die;


assert( 'array' === gettype( Article::findAll() ) );
assert( 'array' === gettype( User::findAll() ) );
assert( 'object' === gettype( Article::findById(9) ) );
assert( 'object' === gettype( User::findById(1) ) );
assert( 'boolean' === gettype( Article::findById(90000) ) );
assert( 'boolean' === gettype( User::findById(90000) ) );
assert( 'array' === gettype( User::findAllLast(2) ) );
assert( 'array' === gettype( Article::findAllLast(4) ) );
assert( 'boolean' === gettype( Article::findAllLast(0) ) );
