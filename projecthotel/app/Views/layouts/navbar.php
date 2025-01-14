<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="/" class="nav-item nav-link">Home</a>
                                <a href="/about" class="nav-item nav-link active">About</a>
                                <a href="/services" class="nav-item nav-link">Services</a>
                                <a href="/rooms" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="/booking" class="dropdown-item">Booking</a>
                                        <a href="" class="dropdown-item">Our Team</a>
                                        <a href="" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div>
                                <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                                <!-- sebelum login -->
                                <div id="loginWrapper">
                                    <a href="/login" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                                        Login <i class="fa fa-arrow-right ms-3"></i>
                                    </a>
                                </div>

                                <!-- sesudah login -->
                                <div id="welcomeWrapper" style="display: none;">
                                    <div class="text-center">
                                        <h4>Welcome back, User!</h4>
                                        <button id="logoutBtn" class="btn btn-danger mt-3">Logout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    

        <div class="container-fluid page-header p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    
        <!-- JQuery Tambahan        -->
<!-- <script type="text/javascript">
        $(document).ready(function(){
        $('#ttlHome').click(function(){
            $('#ttlHead').html('Home');
        });
        $('#ttlPages').click(function(){
            $('#ttlHead').html('Pages');
        });
        $('#ttlAbout').click(function(){
            $('#ttlHead').html('About Us');
        });
        });
</script> -->

<!-- Tes -->
 <!-- <script>
    $(document).ready(function () {
      // Simulasi status login (false = belum login, true = sudah login)
      let isLoggedIn = false;

      // Atur tampilan awal berdasarkan status login
      function updateUI() {
        if (isLoggedIn) {
          $("#loginWrapper").hide(); // Sembunyikan tombol login
          $("#welcomeWrapper").show(); // Tampilkan pesan selamat datang
        } else {
          $("#loginWrapper").show(); // Tampilkan tombol login
          $("#welcomeWrapper").hide(); // Sembunyikan pesan selamat datang
        }
      }

      // Ketika tombol login diklik
      $("#loginWrapper a").click(function (e) {
        e.preventDefault(); // Mencegah aksi default
        isLoggedIn = true; // Ubah status menjadi login
        updateUI(); // Perbarui UI
      });

      // Ketika tombol logout diklik
      $("#logoutBtn").click(function () {
        isLoggedIn = false; // Ubah status menjadi logout
        updateUI(); // Perbarui UI
      });

      // Inisialisasi UI
      updateUI();
    });
  </script> -->