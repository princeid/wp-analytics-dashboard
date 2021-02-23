<?php

namespace App\Controllers;

class HomeController extends BaseController {

    public function index() {

        $this->checkLogin();

        $this->loadView('dashboard', ['title' => 'Wpanalytics']);
    }
}