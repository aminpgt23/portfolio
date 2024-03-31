<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('message');
    }

    public function dashboard()
    {
        $visitorName = $this->request->getGet('name');

        // Pass the name to the view
        $data = [
            'visitorName' => $visitorName,
        ];
    
        return view('profile', $data);
    }

    // public function profile()
    // {
    //     return view('welcome_message');
    // }
    // public function project()
    // {
    //     return view('project');
    // }
    // public function contact()
    // {
    //     return view('contact');
    // }
}
