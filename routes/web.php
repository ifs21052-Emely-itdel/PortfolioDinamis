<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;

// Route untuk pengguna non-login
Route::get('/', function () {
    return view('app\nonlogin\user');
})->name('nonlogin.user');
Route::get("/nonlogin", [UserController::class, "index"])->name("nonlogin.user");

Route::prefix('auth')->group(function () {
    Route::get("/register", [AuthController::class, "getRegister"])->name("register");
    Route::post("/register", [AuthController::class, "postRegister"])->name("post.register");

    Route::get("/login", [AuthController::class, "getLogin"])->name("login");
    Route::post("/login", [AuthController::class, "postLogin"])->name("post.login");

    Route::get("/logout", [AuthController::class, "getLogout"])->name("logout");
});

Route::middleware('auth')->group(function () {
    // Pindahkan route untuk pengguna login ke dalam grup ini
    Route::get("/", [HomeController::class, "index"])->name("home");
    

    Route::prefix("/portofolio")->group(function () {
        Route::get("/add", [PortofolioController::class, "getAddPortofolio"])->name("portofolio.add");
        Route::post("/add", [PortofolioController::class, "postAddPortofolio"])->name("post.portofolio.add");
        Route::get("/edit/{portofolio_id}", [PortofolioController::class, "getEditPortofolio"])->name("portofolio.edit");
        Route::post("/edit", [PortofolioController::class, "postEditPortofolio"])->name("post.portofolio.edit");
        Route::get("/delete/{portofolio_id}", [PortofolioController::class, "getDeletePortofolio"])->name("portofolio.delete");

    });
});
