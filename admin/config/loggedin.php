<?php
        session_start(); //Start session
        //If users is not logged in  (session is not set) then redirect to login page.
        if (!isset($_SESSION['username'])) {
            redirect_user('login.php');
            exit();
        }
