<?php

namespace App\Controllers;

use App\Model\User;

class AuthController extends BaseController {

    
    public function login() {

        $this->loadView('login', ['prince' => 'Me', 'items' => ['A', 'B']]);
    }

    public function processLogin() {

        $email = $this->request->param('email');
        $password = $this->request->param('password');

        try {

            $user = User::findByEmail($email);

            if(!$user) {
                throw new \Exception('Unable to Login');
            }
    
            if(!password_verify($password, $user->password)) {
    
                throw new \Exception('Unable to Login');
            }
    
            /** Set session for logged in user */
            User::updateLastLogin($user->id);
            $this->session->set(USER_SESSION_KEY_NAME, $user->id); 
            $this->session->setFlash('success', sprintf('Welcome %s!', $user->name));
            $this->redirect('/');


        } catch(\Exception $e) {
            $this->session->setFlash('error', $e->getMessage());
            return $this->redirect('/auth/login');
        }

    }


    public function register() {

        $this->loadView('register', ['prince' => 'Me', 'items' => ['A', 'B']]);
    }

    public function processReg() {

        $email = $this->request->param('email');
        $password = $this->request->param('password');
        $name = $this->request->param('name');

        try {

            $oldUser = User::findByEmail($email);

            if($oldUser) {
                throw new \Exception('Email address is already in use');
            }
    
            if(!$email || !$password || !$name) {
                throw new \Exception('All fields are required');
            }
    
    
            $result = User::create([
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'name' => $name
            ]);
    
            if (!$result) {
    
                $this->session->setFlash('error', 'Unable to create user account');
                $this->redirect('/auth/login?msg=error');
                return;
            }
    
            $this->redirect('/auth/login?msg=success');


        } catch(\Exception $e) {

            $this->session->setFlash('error', $e->getMessage());
            return $this->redirect('/auth/register');

        }
        
    }


    public function logout() {

        $this->session->delete();
        $this->redirect('/auth/login?msg=logged-out');

        // session_destroy();
    }






}