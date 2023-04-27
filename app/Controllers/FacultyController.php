<?php

namespace App\Controllers;

use Config\Database;

class FacultyController extends BaseController
{
    public function index()
    {
        $db = Database::connect();
        $query = $db->query("Select * from faculty");
        $list = $query->getResultArray();
        return view('faculty/index', ['data' => $list]);
    }

    public function new(){
        if(!$this->request->is('post')) return view('faculty/new');
        $db = Database::connect();
        $data = $this->request->getPost();
        $db->table('faculty')->insert($data);

        session()->setFlashdata('message', "Faculty created successfully");
        return redirect()->to('/faculty');
    }
}
