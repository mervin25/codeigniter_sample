<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserManagement extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->userModel->findAll()
        ];
        return view('user_management', $data);
    }

    public function create()
    {
        return view('user_form');
    }

    public function save()
    {
        $data = $this->request->getPost([
            'username', 'password', 'user', 'first_name', 'last_name', 'email', 'phone_number'
        ]);
        $this->userModel->save($data);

        session()->setFlashdata('success', 'User added successfully.');

        return redirect()->to('/user_management');
    }


    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('user_form', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost([
            'username', 'password', 'user', 'first_name', 'last_name', 'email', 'phone_number'
        ]);
        $this->userModel->update($id, $data);
        session()->setFlashdata('success', 'User updated successfully!');
        return redirect()->to('/user_management');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('/user_management');
    }
    
    public function view($id)
    {
        $data['user'] = $this->userModel->find($id);
        if (!$data['user']) {
            return redirect()->to('/user_management');
        }
        return view('user_view', $data);
    }
}
