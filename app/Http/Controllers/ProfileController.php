<?php

namespace App\Http\Controllers;



class ProfileController extends Controller
{


    public function profil()
    {
         $data = [
        'nama' => 'Rajendra Ghasia Demarco',   
        'kelas' => 'XI PPLG 1',   
        'sekolah' => 'SMK Raden Umar Said'
    ];

    return view('profil', $data,[
    'title' => 'Profile'
    ]);
    }

    
}
