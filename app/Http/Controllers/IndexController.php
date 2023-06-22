<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\portofolio;

class IndexController extends Controller
{
    //
    function show(){
        $data['profil']=profil::first();
        $data['portofolio']=portofolio::all();
        return view ('index',$data);
    }
}
