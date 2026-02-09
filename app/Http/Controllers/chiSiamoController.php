<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chiSiamoController extends Controller
{
    public function  gruppoChiSiamo () {

    $chiSiamo =  [

    ['id'=> 1, 'name' => 'David', 'surname' => 'Paparo', 'role' => 'Web Developer'],
    ['id'=> 2, 'name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Backend Developer'],
    ['id'=> 3, 'name' => 'Paolo', 'surname' => 'Bianchi', 'role' => 'Frontend Developer'],
    ['id'=> 4, 'name' => 'Giuseppe', 'surname' => 'Verdi', 'role' => 'Designer'],
    ];

    return view ('chi_siamo' , ['chi_siamo' => $chiSiamo]);

    }
}
