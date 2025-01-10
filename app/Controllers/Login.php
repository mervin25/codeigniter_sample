<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        
        $users = $model->select('user')->distinct()->findAll();

        
        return view('login', ['users' => $users]);
    }

    public function authenticate()
    {
        log_message('info', 'Authenticate method called.');
        $session = session();
        $model = new UserModel();

        $userRole = $this->request->getPost('user'); 
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        
        if (empty($userRole)) {
            $session->setFlashdata('error', 'User is required.');
            return redirect()->to('/login');
        }

        if (empty($username)) {
            $session->setFlashdata('error', 'Username is required.');
            return redirect()->to('/login');
        }

        if (empty($password)) {
            $session->setFlashdata('error', 'Password is required.');
           
            return redirect()->to('/login')->withInput();
        }

    
        $user = $model->where('username', $username)->first();
      
        if ($user && $user['user'] === $userRole) {
            if ($password === $user['password']) {
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'user' => $user['user'],
                    'logged_in' => true
                ]);

                // Redirect based on user role
                if ($user['user'] === 'admin') {
                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->to('/dashboard'); 
                }
            } else {
                $session->setFlashdata('error', 'Invalid password.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Invalid credentials for the selected user.');
            return redirect()->to('/login');
        }
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
