<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Pass the username to the view
        return view('dashboard', [
            'username' => session()->get('username')
        ]);
    }
}
