<?php

namespace Mini\Controller;
use Mini\Model\Profile;

class ProfileController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        $profile = new Profile();
        $info = $profile->getUserInfo($_SESSION['username']);
        require APP . 'view/profile/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function validation()
    {
        $notandi = new Skra();
        $notandi->validateForm();
    }

    public function update()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["update"])) {
            // Instance new Model (Song)
            $profile = new Profile();
            // do updateSong() from model/model.php
            $profile->breyta($_POST["nafn"], $_POST["pass"], $_POST["user"]);
        }
        // where to go after song has been added
        header('location: ' . URL . 'profile/index');
    }

    public function logout()
        {
        $notandi = new Profile();
        if(isset($_POST["logout"])) {
            print("isset");
            $notandi->logout();
        }
        print("logout");
            header("location: http://139.59.191.60/");
    }

      public function logoutlink(){
            ob_start();
            require APP . 'view/_templates/header.php';
            session_destroy();
            ob_get_clean();
            header("location: http://139.59.191.60/");
        }
}