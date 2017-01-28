<?php
namespace app\Controllers\admin;
class adminLogin
{
    protected $app,$user;
    public function __construct($app)
    {
        $this->app=$app;
    }

    public function isLoggedIn(){
        $this->users = new \HackBlog\userManagement();

        if ($this->users->isAdmin()) {
            header('location:' . SF_INSTALLDIR . '/admin/main');
            die();
        }
        else{
            return false;
        }
    }

    public function loginPage()
    {
        $this->isLoggedIn();

        $this->app->render('admin/loginPage',[]);

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
        $data_type = isset($_GET["type"]) ? $_GET["type"] : null;

        $this->isLoggedIn();

        if($this->users->isBlocked()) {
            if ($data_type == 'json') {
                die('{"login-blocked: ' . round(($_SESSION['block'] -time()) / 60) . '"}');
            }
            else{
                die('Blocked due to brute-force detection! Wait ' . round(($_SESSION['block'] -
                            time()) / 60) . ' minutes!');
            }
        }


        $user = (isset($_POST['userid'])) ? $_POST['userid'] : null;
        $pass = isset($_POST["password"]) ? $_POST["password"] : null;
        $remember = isset($_POST["remember"]) ? $_POST["remember"] : null;

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