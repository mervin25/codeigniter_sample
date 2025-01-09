<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        // Fetch distinct user roles from the `user` column
        $users = $model->select('user')->distinct()->findAll();

        // Pass the user roles to the view
        return view('login', ['users' => $users]);
    }

    public function authenticate()
    {
        log_message('info', 'Authenticate method called.');
        $session = session();
        $model = new UserModel();

        $userRole = $this->request->getPost('user'); // Get the selected user role
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Check if any field is empty
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
            // Retain the previously selected role and username
            return redirect()->to('/login')->withInput();
        }

        // Find the user based on the username
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
                    return redirect()->to('/dashboard'); // Show all menus including User Management
                } else {
                    return redirect()->to('/dashboard'); // Show default dashboard for employees
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
