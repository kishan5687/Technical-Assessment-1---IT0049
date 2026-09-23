<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['title'] = 'User Accounts';

        // Static PHP array with 5 sample records
        $data['users'] = [
            ['username' => 'admin_raina', 'fullname' => 'Raina Quejada', 'role' => 'Administrator'],
            ['username' => 'cashier_franc', 'fullname' => 'Franc Huab', 'role' => 'Cashier'],
            ['username' => 'manager_vikki', 'fullname' => 'Vikki Santiago', 'role' => 'Manager'],
            ['username' => 'cashier_antonio', 'fullname' => 'Antonio Sta. Ana', 'role' => 'Cashier'],
            ['username' => 'stock_kishan', 'fullname' => 'Kishan Lazaro', 'role' => 'Inventory Clerk'],
        ];

        return view('users/index', $data);
    }
}
