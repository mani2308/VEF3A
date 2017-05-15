<?php

namespace Mini\Controller;
use Mini\Model\Register;
class RegisterController
{

    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/register/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function register()
    {
        ob_start();
        require APP . 'view/_templates/header.php'; //register user inn í gegnum ob_start sem er í headernum
        if (isset($_POST["register"])) {
            $notandi = new Register();
            $ret =  $notandi->register($_POST["nafn"], $_POST["username"],  $_POST["pass"]);
            if($ret == true)
            {
                $this->index();
                $_SESSION['username'] = $_POST['username'];
                ob_get_clean();
                header("Refresh:0");
            }
            else{
                print("Error");
            }
        }
        header('location:'. URL.'profile' );
    }


    public function validate()
    {
        $notandi = new Register();
        $notandi->VF();
    }

    function login()
    {
        ob_start();
        require APP . 'view/_templates/header.php'; // loggar inn í ob_start sem er í headernum
        if (isset($_POST['login'])) {
            $notandi = new Register();
            $obj = $notandi->Login($_POST['user'], $_POST['pass']);
            $ret = array($obj);
            print_r($ret);
            if ($ret[0]->username == $_POST['user']) {
                $_SESSION['username'] = $_POST['user'];
                ob_get_clean();
                header('location:'. URL.'register' );
            } else {
                print "password";
            }
        }
    }

}