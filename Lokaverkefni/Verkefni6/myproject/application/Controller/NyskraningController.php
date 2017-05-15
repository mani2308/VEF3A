<?php

namespace Mini\Controller;
use Mini\Model\Nyskraning;
class NyskraningController
{

    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/register/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function nyskra()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        if (isset($_POST["nyskra"])) {
            $notandi = new Nyskraning();
            $ret =  $notandi->nyskra($_POST["nafn"], $_POST["username"],  $_POST["pass"]);
            if($ret == true)
            {
                $this->index();
                $_SESSION['username'] = $_POST['username'];
                ob_get_clean();
                header("Refresh:0");
            }
            else{
                print("virkaði ekki");
            }
        }
        header('location:'. URL.'profile' );
    }

    public function validation()
    {
        $notandi = new Nyskraning();
        $notandi->validateForm();
    }

    function innskra()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        if (isset($_POST['innskra'])) {
            $notandi = new Nyskraning();
            $obj = $notandi->logIn($_POST['username'], $_POST['pass']);
            $ret = array($obj);
            print_r($ret);
            if ($ret[0]->username == $_POST['username']) {
                $_SESSION['username'] = $_POST['username'];
                ob_get_clean();
                header('location:'. URL.'profile' );
            } else {
                print "lykilorð";
            }
        }
    }

}