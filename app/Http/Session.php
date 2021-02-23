<?php

namespace App\Http;

use \Aura\Session\SessionFactory;

class Session
{

    protected $store = null;
    private static $instance = null;
    

    private function __construct()
    {

        
        $sessionFactory = new \Aura\Session\SessionFactory;
        $session = $sessionFactory->newInstance($_COOKIE);
        $this->store = $session->getSegment('App\WpAnalytics');
    }

    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function set($key, $value) {

        $this->store->set($key, $value);
    }

    public function get($key) {

        return $this->store->get($key);
    }

    public function setFlash($key, $value) {

        $this->store->setFlash($key, $value);
    }

    public function getFlash($key) {

        return $this->store->getFlash($key);
    }

    public function delete() {

        return $this->store->clear();
    }



}
