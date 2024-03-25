<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Portofolio;

class UserController extends Controller
{
    public function index()
    {

       $data =Portofolio::all();

        return view("app.nonlogin.user", ['data'=>$data]);
    }
}
