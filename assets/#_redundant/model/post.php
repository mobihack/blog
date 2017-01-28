<?php

$post=new Shatter\FileDB($postFile);
$postData=$post->read();

$userFile='data/author/'.strtolower($postData['author']).'.user.php';
$user=new Shatter\FileDB($userFile);
$userData=$user->read();

include (BASEPATH.'views/_header.php');
include (BASEPATH.'views/blog/post.php');
include (BASEPATH.'views/_footer.php');