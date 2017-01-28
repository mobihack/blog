<?php

$user=new Shatter\FileDB($userFile);
$userData=$user->read();

include (BASEPATH.'views/_header.php');
include (BASEPATH.'views/blog/user.php');
include (BASEPATH.'views/_footer.php');