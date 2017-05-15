<?php

namespace Mini\Controller;
use Mini\Model\Profile;
class ProfileController
{

    public function index()
    {
        require APP . 'view/_templates/header.php';
        $profile = new Profile();
        $info = $profile->getUserInfo($_SESSION['username']);
        require APP . 'view/profile/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function logoutlink(){
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
        header("location: http://139.59.191.60/");
    }

    public function logout()
    {
        $notandi = new Profile();
        if(isset($_POST["logout"])) {
            print("isset");
            $notandi->logout();
        }
        print("logout");
    }

    public function validation()
    {
        $notandi = new Profile();
        $notandi->validateForm();
    }

    public function breyta()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["breyta"])) {
            // Instance new Model (Song)
            $profile = new Profile();
            // do updateSong() from model/model.php
            $profile->breyta($_POST["nafn"], $_POST["pass"], $_POST["user"]);
        }
        header('location: ' . URL . 'profile/index');
    }

}