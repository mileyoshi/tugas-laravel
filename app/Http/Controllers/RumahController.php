<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   
class RumahController extends Controller
{
    
    public function index(){



    $data = ['name' => 'Meli Herawati'];    
    return view ("rumah", $data);


    }


}
