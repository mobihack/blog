<?php
namespace app\Controllers\admin;
class adminPages
{
    protected $app,$user;
    public function __construct($app)
    {
        $this->app=$app;
    }

    public function isLoggedIn(){
        $this->users = new \HackBlog\userManagement();

        if (!$this->users->isAdmin()) {
            header('location:' . SF_INSTALLDIR . '/admin/login');
            die();
        }
        else{
            return false;
        }
    }

    public function logout()
    {
        $this->isLoggedIn();

        session_start();
        session_destroy();
        header('location:' . SF_INSTALLDIR . '/admin/login');
        die();

    }
    public function subPageRouter()
    {
        $this->isLoggedIn();

        $data=[];

        $this->app->render('admin/subPages/'.$this->app->routerMatch['params']['action'],$data);

        var_dump($this->app->routerMatch);

    }
    public function mainPage()
    {

        $this->isLoggedIn();

        $sidebar=[];
        $notiData=new \Shatter\FileDB(BASEPATH.'/data/panel/log.panel.php');
        try {
            $notifications = array_reverse($notiData->read());
        }catch (Exception $error){
            die('Panel Notifications Error!');
        }
        $sidebar['notifications']=$notifications;


            $data=array(
                'notifications'=>$sidebar['notifications']
                );

            $this->app->render('admin/mainPage',$data);

    }
    public function checkLogin()
    {

        if(!$this->isLoggedIn()){

            header('location:' . SF_INSTALLDIR . '/admin/login');
            die();

        }

    }
    public function tryLogin()
    {

        $this->isLoggedIn();

        $this->users->tryBlocking();


        $user = (isset($_POST['userid'])) ? $_POST['userid'] : null;
        $pass = isset($_POST["password"]) ? $_POST["password"] : null;
        $remember = isset($_POST["remember"]) ? $_POST["remember"] : null;

        $data_type = isset($_GET["type"]) ? $_GET["type"] : null;
        //var_dump($user,$pass,password_hash($pass, PASSWORD_DEFAULT));
        if ($this->users->login($user, $pass,$remember)) {
            if($data_type=='json'){
                die('{"login-done"}');
            }else {
                header("location:" . SF_INSTALLDIR . "/admin/main");
                die();
            }
        }else if($data_type=='json'){
            die('{"login-fail"}');
        }
    }
}