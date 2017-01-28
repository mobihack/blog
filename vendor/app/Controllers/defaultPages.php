<?php
namespace app\Controllers;
class defaultPages
{
    protected $app;
    public function __construct($app)
    {
        $this->app=$app;
    }

    public function error($errorCode='404')
    {

            $this->app->render('errorPages/'.$errorCode);
    }
}