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

          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto fw-bold">
              <li class="nav-item">
                <a href="#" class="active nav-link">Home</a>
              </li>
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
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section
      class="home d-flex min-vh-100 .col-md-4"
      style="background-image: url('img/background.jpg')"
    >
      <div class="home-content">
        <h1>Hi there!</h1>
        <h3>I'm Emely Simanjuntak</h3>
        <p class="multiple-text">
          Learner & Frontend Enthusiast
        </p>
        <br />
        <br />
        <div class="btn-box">
          <a href="#contact" class="nav-link">Hire Me</a>
          <a href="/assets/Emely_CV.pdf" target="_blank">Download CV</a>
        </div>
      </div>

      <div class="home-sci">
        <a href="https://www.instagram.com/emelysmnjtk/" target="_blank"
          ><i class="bx bxl-instagram"></i
        ></a>
        <a
          href="https://www.linkedin.com/in/emely-angelica-lestari-b3b01b182/"
          target="_blank"
          ><i class="bx bxl-linkedin"></i
        ></a>
        <a href="mailto:emelyangelicalestari@gmail.com" target="_blank"
          ><i class="bx bx-envelope"></i
        ></a>
      </div>

      <span class="home-imgHover"></span>
    </section>

    <section id="about" class="container py-5">
      <div class="text-center py-5">
        <h2 class="fw-bolder text-uppercase" style="color: #081b29">about</h2>
      </div>


     
      <div class="row">
        <div class="col-md-4 mb-3">
          <img
            src="{{asset('img/myown.jpg')}}"
            alt=""
            class="img-fluid"
            style="display: block; margin: 0 auto"
          />
        </div>
        <div class="col-md-7 offset-lg-1">
          <div class="data-diri">
            <hr />
            <ul>
              <li><b>Name</b> : Emely Angelica Lestari</li>
              <li><b>Age</b> : 21</li>
              <li><b>From</b> : Bekasi, Indonesia</li>
              <li><b>Email</b> : emelyangelicalestari@gmail.com</li>
            </ul>
          </div>
          <hr />
          <p class="lh-lg" style="text-align: justify">
            I am a passionate informatics student with great passion in the
            field of frontend development. With a love for design and pleasing
            displays, I strive to create engaging and intuitive user
            experiences. In my academic journey, I have participated in some
            competitions regarding website development and user experience
            satisfaction. With my strong interest in frontend development, I am
            determined to continue to develop and contribute to creating a more
            interesting and user-friendly web world. I look forward to
            collaborating with people who share similar passions and continuing
            to pursue excellence in the world of web design.
          </p>
          <p class="fw-bold fs-4">My Skills:</p>
          <div class="mb-2">
            <p class="m-0">Management:</p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped bg-gradient"
                style="width: 90%"
              >
                90%
              </div>
            </div>
          </div>
          <div class="mb-2">
            <p class="m-0">Leadership:</p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped bg-gradient"
                style="width: 90%"
              >
                90%
              </div>
            </div>
          </div>
          <div class="mb-2">
            <p class="m-0">HTML:</p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped bg-success"
                style="width: 85%"
              >
                85%
              </div>
            </div>
          </div>
          <div class="mb-2">
            <p class="m-0">CSS:</p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped bg-info"
                style="width: 80%"
              >
                80%
              </div>
            </div>
          </div>
          <div class="mb-2">
            <p class="m-0">Javascript:</p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped bg-warning"
                style="width: 30%"
              >
                30%
              </div>
            </div>
          </div>
          <div class="mb-2">
            <p class="m-0">Bootstrap 5:</p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped bg-danger"
                style="width: 55%"
              >
                55%
              </div>
            </div>
            <br>
            <div class="btn-box">
              <a href="assets/Emely_CV.pdf" target="_blank">Open CV</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="bg-dark py-5">
      <div class="container">
        <div class="text-center py-5 text-white">
          <h2 class="fw-bolder text-uppercase">My Portfolio</h2>
          <p>Recent completed works</p>
        </div>
        
        <div class="row pb-5">
          @foreach($data as $item)
          <div class="col-md-6 col-lg-4 mb-4 portfolio">
            <a href="{{ $item->link }}" target="_blank">
            <img
              src="{{asset($item -> gambar)}}"
              alt="{{ $item->alt }}"
              class="img-fluid img-thumbnail"
            />
          </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section id="resume" class="container py-5">
      <div class="text-center py-5">
        <h2 class="fw-bolder text-uppercase" style="color: #081b29">Resume</h2>
        <p>
          <!-- -->
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3 element">
          <h3 class="text-6 fw-600 mb-4 portfolio">Education</h3>
          <div
            class="bg-white rounded p-4 mb-4 bg-white border"
            style="font-size: 10"
          >
            <p class="badge bg-primary text-2 fw-400">2009 - 2015</p>
            <h3 class="text-5">SD Negeri Cibuntu 05</h3>
            <p class="text-danger">Elementary School</p>
          </div>

          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2015 - 2019</p>
            <h3 class="text-5">SMP Negeri 1 Setu</h3>
            <p class="text-danger">Junior High School</p>
          </div>

          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2019 - 2021</p>
            <h3 class="text-5">SMA Negeri 5 Tambun Selatan</h3>
            <p class="text-danger">Senior High School</p>
          </div>

          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2021 - Present</p>
            <h3 class="text-5">Del Institute of Technology</h3>
            <p class="text-danger">University</p>
          </div>
        </div>

        <div class="col-md-6 mb-3 element">
          <h2 class="text-6 fw-600 mb-4 portfolio">My Experience</h2>
          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2022 - 2023</p>
            <h3 class="text-5">Physics Laboratory Assistant</h3>
            <p class="text-danger">
              at Informatics and Bioprocess Engineering
            </p>
          </div>

          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2023</p>
            <h3 class="text-5">Community Service Program</h3>
            <p class="text-danger">
              Improving the content on the Pardinggaran tourist village website
            </p>
          </div>

          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2021 - Present</p>
            <h3 class="text-5">Head Class</h3>
            <p class="text-danger">
              of Informatics Class 2021
            </p>
          </div>

          <div class="bg-white rounded p-4 mb-4 bg-white border">
            <p class="badge bg-primary text-2 fw-400">2022 - Present</p>
            <h3 class="text-5">Student Executive Board</h3>
            <p class="text-danger">
              Member of Event Division in Department of Science and Technology
            </p>
          </div>

        </div>
      </div>
    </section>

    <section id="contact" class="bg-dark py-5">
      <div class="container">
        <div class="text-center py-5 text-white">
          <h2 class="fw-bolder text-uppercase">Contact Me</h2>
          <div class="contact-b">
        <a href="https://www.instagram.com/emelysmnjtk/" target="_blank"
          ><i class="bx bxl-instagram"></i
        ></a>
        <a
          href="https://www.linkedin.com/in/emely-angelica-lestari-b3b01b182/"
          target="_blank"
          ><i class="bx bxl-linkedin"></i
        ></a>
        <a href="mailto:emelyangelicalestari@gmail.com" target="_blank"
          ><i class="bx bx-envelope"></i
        ></a>
      </div>
          <p></p>
        </div>
        <div
          class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto"
        >
              <form
                id="myForm"
                class="needs-validation text-white form-contact"
                onsubmit="return validateForm()"
              >
                <div class="mb-3">
                  <label class="form-label" for="nama">Your Name</label>
                  <input class="form-control" type="text" id="nama" name="nama" />
                  <div class="invalid-feedback" id="namaError">Error</div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="email">Your Email</label>
                  <input
                    class="form-control"
                    type="email"
                    id="email"
                    name="email"
                  />
                  <div class="invalid-feedback" id="emailError">Error</div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="subject">Your Subject</label>
                  <input
                    class="form-control"
                    type="text"
                    id="subject"
                    name="subject"
                  />
                  <div class="invalid-feedback" id="subjectError">Error</div>
                </div>

                <div class="mb-3">
                  <label for="message" class="form-label">Your Message</label>
                  <textarea
                    name="message"
                    cols="30"
                    rows="10"
                    class="form-control"
                    id="message"
                  ></textarea>
                  <div class="invalid-feedback" id="messageError">Error</div>
                </div>

                <div class="mb-3 text-end">
                  <input class="btn btn-primary btn-lg" type="submit" value="Send Message" />
                </div>
              </form>

        <script>
          function validateForm() {
            let status = {
              nama: true,
              email: true,
              message: true,
              subject: true,
            };

            let elmntNama = document.getElementById("nama");
            let elmntEmail = document.getElementById("email");
            let elmntSubject = document.getElementById("subject");
            let elmntMessage = document.getElementById("message");

            elmntNama.classList.remove("is-invalid");
            elmntEmail.classList.remove("is-invalid");
            elmntMessage.classList.remove("is-invalid");
            elmntSubject.classList.remove("is-invalid");

            var nama = elmntNama.value.trim();
            var email = elmntEmail.value.trim();
            var message = elmntMessage.value.trim();
            var subject = elmntSubject.value.trim();

            var namaError = document.getElementById("namaError");
            var emailError = document.getElementById("emailError");
            var messageError = document.getElementById("messageError");
            var subjectError = document.getElementById("subjectError");

            namaError.innerHTML = "";
            emailError.innerHTML = "";
            messageError.innerHTML = "";
            subjectError.innerHTML = "";

            if (nama === "") {
              namaError.innerHTML = "Nama harus diisi";
              status.nama = false;
            }

            if (email === "") {
              emailError.innerHTML = "Email harus diisi";
              status.email = false;
            } else {
              const emailPattern =
                /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

              if (!emailPattern.test(email)) {
                emailError.innerHTML = "Format email tidak valid";
                status.email = false;
              }
            }

            if (subject === "") {
              subjectError.innerHTML = "Subject harus diisi";
              status.subject = false;
            }

            if (message === "") {
              messageError.innerHTML = "Message belum diisi";
              status.message = false;
            }

            if (!status.nama) {
              elmntNama.classList.add("is-invalid");
            }

            if (!status.email) {
              elmntEmail.classList.add("is-invalid");
            }

            if (!status.message) {
              elmntMessage.classList.add("is-invalid");
            }

            if (!status.subject) {
              elmntSubject.classList.add("is-invalid");
            }

            console.log(status);
            return status.nama && status.email && status.subject && status.message;
          }
        </script>
    </section>

    <footer class="bg-light">
      <div class="container text-center">
        <p class="mb-0 py-3 fs-5">
          <strong>Pabwe Project</strong> &copy; 2023
        </p>
      </div>
    </footer>

    <script>
      // Ambil semua elemen dengan class "progress-bar"
      const progressBars = document.querySelectorAll(".progress-bar");

      // Loop melalui setiap elemen progress-bar
      progressBars.forEach((bar) => {
        // Tambahkan event listener untuk mengubah tebal saat di-hover
        bar.addEventListener("mouseover", () => {
          bar.style.fontWeight = "bold";
        });

        // Tambahkan event listener untuk mengembalikan ke normal saat mouse meninggalkan elemen
        bar.addEventListener("mouseout", () => {
          bar.style.fontWeight = "normal";
        });
      });
    </script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>