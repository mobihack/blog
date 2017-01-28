<?php
namespace HackBlog;
class userManagement
{
    protected $adminData;
    public $block_time=300;


    public function __construct()
    {

        global $_SESSION;

        session_start();

    }

    public function login($user, $pass,$remember)
    {
        global $_SESSION;

        if (!is_null($user) or !is_null($pass))
            $_SESSION['try']=(!isset($_SESSION['try']))?1:$_SESSION['try']+1;

        if(is_file(BASEPATH.'/data/author/'.strtolower($user).'.user.php')) {
            $globaladminDat = new \Shatter\FileDB(BASEPATH . '/data/author/'.strtolower($user).'.user.php');
            $this->adminData = $globaladminDat->read();

            new \Antnee\PhpPasswordLibCheck;

        if ($this->adminData['id']==strtolower($user) and password_verify($pass, $this->adminData['password'])) {

            if (isset($_SESSION['try']))
                unset($_SESSION['try']);

            $_SESSION["admin"] = $this->adminData;
            unset($_SESSION['admin']['password']);
                $this->setTimeout($remember);
            $this->log($user);
            return true;
        }
        else{
            return false;
        }
        }
        else{
            return false;
        }

    }
    public function isBlocked(){

    global $_SESSION;

        if (isset($_SESSION['block']) and $_SESSION['block'] < time()) {
            unset($_SESSION['block'], $_SESSION['try']);
            return false;
        }
        elseif(isset($_SESSION['block']) and $_SESSION['block'] > time()){
            return true;
        }
        else if (isset($_SESSION['try']) and $_SESSION['try'] > 4 && !isset($_SESSION['block']))
        {
                $_SESSION['block'] = time() + $this->block_time;
                return true;
        }
    }
    public function isAdmin(){
        global $_SESSION;
        if(isset($_SESSION['admin']))
            return true;
                else
                    return false;
    }
    public function onTime(){
        global $_SESSION;
        if(!isset($_SESSION['admin']['time']))
            return true;
        else{
            if($_SESSION['admin']['time']<time()){
            return false;
            }
            else{
                return true;
            }
        }
    }
    public function noAccess($page=null){
        global $_SESSION;
        if(isset($page) and $page!=null){
        if($_SESSION['admin']['user']!=='root' and in_array($page,$_SESSION['admin']['rights'])===false)
            return true;
        else
            return false;

            }
            else{
                return false;
            }
    }
    public function setTimeout($timeout){
        global $_SESSION;
        $timeout=(int)$timeout;
        if(($timeout>=1 or $timeout<=10) and $timeout!=0){
            $_SESSION["admin"]['time']=time()+($timeout*3600);
        }
    }
    public function log($user,$data='login'){
        $log=new \Shatter\FileDB(BASEPATH .'/data/panel/log.panel.php');
        $log->write(array(array($user,time(),$data)),true);


    }
}
