<?php

namespace App\Controllers;

use Config\Database;

class User extends BaseController
{
    public function index(){
        $db = Database::connect();
        $query = $db->query("select * from student");
        $list = $query->getResultArray();
        return View('user/index', ['students' => $list]);
    }

    public function new(){
        if(!$this->request->is('post')){
            return View('user/new');
        }
        $data = $this->request->getPost();
        $user = [
            'name' => $data['name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone_no' => $data['phone_no']
        ];
        $db = Database::connect();
        $db->table('student')->insert($data);
        return redirect()->to('/user');
    }

}