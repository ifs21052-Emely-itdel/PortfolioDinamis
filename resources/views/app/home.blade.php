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
                <a href="#portfolio" class="nav-link">Edit Portfolio</a>
              </li>
              <li class="nav-item">
                <div class="dropdown dropstart nav-item">
                  <button class="btn dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('/img/default.png')}}" style="height:30px;" alt="profile">
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('nonlogin.user') }}">Tampilan Nonlogin</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
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
      <div>
        <a href="{{ route("portofolio.add") }}" class="btn btn-primary">Tambah Data</a>
      </div>
      <section>
        <div class="container">
            <table class="table table-striped">
              <<div class="bd-example">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">link</th>
                    <th scope="col">alt</th>
                    <th scope="col">gambar</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($portofolios as $portofolio)
                  <tr>
                    <td scope="col">{{ $portofolio->id }}</td>
                    <td scope="col">{{ $portofolio->link }}</td>
                    <td scope="col">{{ $portofolio->alt }}</td>
                    <td scope="col">
                      <img src="{{ asset($portofolio->gambar) }}" style="height: 64px;" alt="Portofolio">
                    </td>
                    <td>
                      <a href="{{ route("portofolio.edit", ['portofolio_id'=>$portofolio->id]) }}" class="btn btn-sm btn-warning">Ubah</a>
                      <a onclick="return confirm('Yakin ingin menghapus data?');" href="{{ route("portofolio.delete", ['portofolio_id'=>$portofolio->id]) }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

                </table>
              </div>
            </table>
        </div>
      </section>
    </section>


{{--
    <footer class="bg-light">
      <div class="container text-center">
        <p class="mb-0 py-3 fs-5">
          <strong>Pabwe Project</strong> &copy; 2023
        </p>
      </div>
    </footer> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
