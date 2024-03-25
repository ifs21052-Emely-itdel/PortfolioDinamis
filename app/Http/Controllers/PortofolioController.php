<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{
    public function getAddPortofolio(){
        $data = [
            "auth" => Auth::user()
        ];
        return view("app.portofolio.add", $data);
    }
    public function postAddPortofolio(Request $request){
        
        $this->validate($request, [
            "link"=> "required|string",
            "alt"=> "required|string",
            "gambar"=> "required|image|mimes:jpeg,png,jpg|max:1024",
        ]);

        $auth = Auth::user();

        // Mengambil file yang sudah divalidasi dari request
        $photo = $request->file('gambar');
    
        // Membuat nama unik untuk file yang diunggah
        $filename = $auth->id . "_" . time() . '.' . $photo->getClientOriginalExtension();
    
        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('img/portofolio/');
    
        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        $gambar = "img/portofolio/" . $filename;
    
        Portofolio::create([
            "user_id" => $auth->id,
            "link"=> $request->link,
            "alt"=> $request->alt,
            "gambar"=> $gambar,
        ]);
    
        return redirect()->route("home");
    }

    public function getEditportofolio($portofolio_id){

        $auth = Auth::user();
        $portofolio = Portofolio::where("id", $portofolio_id)->where("user_id", $auth->id)->first();

        if(!$portofolio){
            return redirect()->route("home");
        }

        $data = [
            "auth" => $auth,
            "portofolio"=> $portofolio
            ];

            return view("app.portofolio.edit", $data);
    }

    public function postEditportofolio(Request $request)
    {
        $this->validate($request, [
            "portofolio_id"=> 'required|exists:portofolios,id',
            "link"=> "required|string",
            "alt"=> "required|string",
            "gambar"=> "required|image|mimes:jpeg,png,jpg|max:1024|nullable",
        ]);

        $auth = Auth::user();

        $portofolio = Portofolio::where("id", $request->portofolio_id)->first();

        // Mengambil file yang sudah divalidasi dari request
        $file_gambar = $request->file('gambar');
        if($file_gambar){
            // Membuat nama unik untuk file yang diunggah
            $filename = $auth->id . "_" . time() . '.' . $file_gambar->getClientOriginalExtension();
        
            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('img/portofolio/');
        
            //Pindahkan file ke direktori yang diinginkan
            $file_gambar->move($directory, $filename);

            // ganti gambar dan hapus data lama
            if($portofolio->gambar && file_exists($portofolio->gambar)){
                unlink($portofolio->gambar);
            }

            $portofolio->gambar = "img/portofolio/" . $filename;
            
        }
    
        $portofolio-> link = $request->link;
        $portofolio-> alt = $request->alt;
        $portofolio->save();
    
        return redirect()->route("home");
    }

    public function getDeleteportofolio($portofolio_id){

        $auth = Auth::user();
        $portofolio = Portofolio::where("id", $portofolio_id)->where("user_id", $auth->id)->first();

        if(!$portofolio){
            return redirect()->route("home");
        }

        $portofolio->delete();
        return redirect()->route("home");
    }
}
