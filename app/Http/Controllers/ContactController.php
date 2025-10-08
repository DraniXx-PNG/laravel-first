<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
    
    public function kontak()
    {
        return view('kontak',[
        'title' => 'Contact'
    ]); 
    }
}
