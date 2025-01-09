<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // The table name
    protected $primaryKey = 'id'; // The primary key of the table
    protected $allowedFields = ['username', 'password', 'user', 'first_name', 'last_name', 'email', 'phone_number']; 
}
