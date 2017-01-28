<?php
namespace Shatter;
class app {
    protected $router;
    public $routerMatch;

    public function __construct()
    {
        $this->router = new \Shatter\AltoRouter();
        $this->router->setBasePath(SF_INSTALLDIR);
        $this->router->addRoutes(require (BASEPATH.DIRECTORY_SEPARATOR.'vendor/app/Routes/Routes.php'));
    }
    public function callError404(){
        // no route was matched
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        $controller = new \app\Controllers\defaultPages($this);
        $controller->error('404');
    }
    public function start()
    {
        $this->routerMatch = $this->router->match();

        if( $this->routerMatch ) {
            $names=explode('#',$this->routerMatch['target']);
            $controllerName='\app\Controllers\\'.str_replace(array('/','\\','@'),'\\',$names[0]);
            $actionName=$names[1];
            $controller = new $controllerName($this);
            $controller->$actionName();

        } else {
            $this->callError404();
        }
    }
    public function render($view,$data=[]){

        //add data
        {
            $data['SF_INSTALLDIR']=SF_INSTALLDIR;
        }

        $theme='Base';
        $themesDir=BASEPATH.'/vendor/app/Views/';

        $twigLoader = new \Twig_Loader_Filesystem($themesDir);

        $template = new \Twig_Environment($twigLoader, array(
            'cache' => BASEPATH.'/vendor/app/Cache/',
            'auto_reload' => true,
            //'debug' => true,
        ));


        $filter = new \Twig_SimpleFilter('ucfirst', function ($string) {
            return ucfirst($string);
        });

        $template->addFilter($filter);
        $filter2 = new \Twig_SimpleFilter('basename', function ($string) {
            return basename($string);
        });
        $template->addFilter($filter2);

        $view=(is_file(BASEPATH.$themesDir.$theme.'/'.$view.'.php'))?$theme.'/'.$view.'.php':'Base/'.$view.'.php';

        echo $template->render($view,$data);

    }
}