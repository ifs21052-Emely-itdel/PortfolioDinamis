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
              {{-- <li class="nav-item">
                <a href="#" class="active nav-link">Home</a>
              </li> --}}
              <li class="nav-item">
                <a href="#about" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="#portfolio" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item">
                <a href="#resume" class="nav-link">Resume</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <div class="dropdown dropstart nav-item">
                <button class="btn dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('/img/default.png')}}" style="height:30px;" alt="profile">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
                </ul>
              </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="portfolio" class="bg-dark py-5">
      <div class="container">
        <div class="text-center py-5 text-white">
          <h2 class="fw-bolder text-uppercase">My Portfolio</h2>
          <p>Recent completed works</p>
        </div>
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">Tambah Data</div>
  
                      <div class="card-body">
                          <form method="POST" action="{{ route('post.profile.add') }}" enctype="multipart/form-data">
                              @csrf
  
                              <div class="form-group mb-2">
                                  <label for="nama">Nama</label>
                                  <input id="nama" type="text"
                                      class="form-control @error('nama') is-invalid @enderror" name="nama"
                                      value="{{ old('nama') }}" required autofocus>
                                  @error('nama')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
  
                              <div class="form-group mb-2">
                                  <label for="umur">Umur</label>
                                  <input id="umur" type="number"
                                      class="form-control @error('umur') is-invalid @enderror" name="umur" required>
                                  @error('umur')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
  
                              <div class="form-group mb-2">
                                  <label for="kota">Kota</label>
                                  <input id="kota" type="text"
                                      class="form-control @error('kota') is-invalid @enderror" name="kota" required>
                                  @error('kota')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
  
                              <div class="form-group mb-2">
                                  <label for="negara">Negara</label>
                                  <input id="negara" type="text"
                                      class="form-control @error('negara') is-invalid @enderror" name="negara" required>
                                  @error('negara')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
  
                              <div class="form-group mb-2">
                                  <label for="email">Email</label>
                                  <input id="email" type="email"
                                      class="form-control @error('email') is-invalid @enderror" name="email" required>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
  
                              <div class="form-group mb-2">
                                  <label for="deskripsi">Deskripsi</label>
                                  <input id="deskripsi" type="text"
                                      class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>
                                  @error('deskripsi')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
  
                              <div class="form-group mb-2">
                                  <label for="gambar">Upload Gambar</label>
                                  <input id="gambar" type="file"
                                      class="form-control @error('gambar') is-invalid @enderror" name="gambar" required>
                                  @error('gambar')
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
      </div>
    </section>
  </body>
</html>
