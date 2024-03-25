<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $auth = Auth::user();
        $portofolios = Portofolio::orderBy("created_at", "desc")->get();

        $data = [
            "auth" => $auth,
            "portofolios" => $portofolios
        ];

        return view("app.home", $data);
    }
}
