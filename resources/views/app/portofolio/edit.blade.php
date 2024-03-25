@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css"
    />
    <link rel="shortcut icon" href="img/title_logo.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootsrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
      .nav-link.active {
        color: #0d6efd !important;
      }

      .navbar,
      .navbar-nav .nav-link {
        color: #ffffff;
      }

      .navbar {
        background-color: #081b29;
      }
    </style>
  </head>

  <body data-bs-spy="scroll" data-bs-target="#nav-scroll">
    <header class="header">
      <nav
        class="navbar navbar-expand-lg fixed-top navbar-light bg-opacity-100"
        id="nav-scroll"
        style="
          margin-left: 0;
          margin-right: 0;
          padding-left: 0;
          padding-right: 0;
        "
      >
        <div class="container-fluid">
          <a href="#" class="navbar-brand nav-link" style="color: #ffffff"
            ><img src="{{asset('img/logo.png')}}" width="100"></a
          >
          <button
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            style="color: #ffffff; background-color: #ffffff"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto fw-bold">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item">
                <div class="dropdown dropstart nav-item">
                <button class="btn dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('/img/default.png')}}" style="height:30px;" alt="profile">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Tampilan Nonlogin</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
                </ul>
              </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="portfolio" class="container py-5">
      <div class="text-center py-5">
        <h2 class="w-bolder text-uppercase" style="color: #081b29">portofolio</h2>
      </div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Ubah Data</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.portofolio.edit') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="portofolio_id" value="{{ $portofolio->id }}">

                            <div class="form-group mb-2">
                                <label for="link">URL</label>
                                <input id="link" type="text" value="{{$portofolio->link}}" class="form-control @error('link') is-invalid @enderror" name="link" required>
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                              <label for="alt">Alt</label>
                              <input id="alt" type="text" value="{{$portofolio->alt}}" class="form-control @error('alt') is-invalid @enderror" name="alt" required>
                              @error('alt')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                            <div class="form-group mb-2">
                              <img src="{{asset($portofolio->gambar)}}" style="height:120px;" alt="Portfolio">
                                <label for="gambar">Upload Gambar</label>
                                <input id="gambar" type="file"
                                    class="form-control @error('gambar') is-invalid @enderror" name="gambar" required>
                                @error("gambar")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
