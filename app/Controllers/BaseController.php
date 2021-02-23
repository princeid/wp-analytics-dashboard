<?php

namespace App\Controllers;

use App\Http\Request;
use App\Http\Session;

abstract class BaseController {

    protected $request;
    protected $session;


    public function __construct()
    {
        $this->request = new Request();
        $this->session = Session::getInstance();

    }

    // public function param($key) {
    //     return isset($_GET[$key]) ? $_GET[$key] : '';
    // }
    
    public function loadView($name, $data = []) {

        $view = VIEW_PATH . '/' . $name . '.php';

        if (!file_exists($view)) throw new \Exception($view . ' not found');

        ob_start();
        extract($data);
        require_once $view;
        $content = ob_get_contents();
        ob_clean();

        echo $content;
    }

    public function redirect($to) {
        header('Location:' . $to);
        exit;
    }

    protected function checkLogin() {

        $userId = $this->session->get(USER_SESSION_KEY_NAME);
        if (!$userId) {
            $this->session->setFlash('info', 'You must must be logged in to proceed');
            $this->redirect('/auth/login');
            exit;
        }
    }


}