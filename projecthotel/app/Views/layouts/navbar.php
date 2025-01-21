<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img class="Logo" src="assets/img/Logo.png" alt="Brand">
                        <h1 class="m-0 text-primary text-uppercase">El Scaro</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">Info@elscaro.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">082122789908</p>
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

                        <!-- Menu Navigasi -->
                        <div class="navbar-nav mr-auto py-0">
                                <a href="/" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "index.php") ? "active" : ""; ?>">Home</a>
                                <a href="about" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "about") ? "active" : ""; ?>">About</a>
                                <a href="fasilitas" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "services") ? "active" : ""; ?>">Facility</a>
                                <a href="rooms" class="nav-item nav-link <?= (basename($_SERVER['PHP_SELF']) == "rooms") ? "active" : ""; ?>">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking" class="dropdown-item <?= (basename($_SERVER['PHP_SELF']) == "booking") ? "active" : ""; ?>">Booking</a>
                                        <a href="team" class="dropdown-item <?= (basename($_SERVER['PHP_SELF']) == "team") ? "active" : ""; ?>">Our Team</a>
                                        <a href="testimoni" class="dropdown-item <?= (basename($_SERVER['PHP_SELF']) == "testimoni") ? "active" : ""; ?>">Testimonial</a>
                                    </div>
                                </div>
                            </div>
                                
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
    

        <!-- <div class="container-fluid page-header p-0" style="background-image: url(<?=base_url()?>assets/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                </div>
            </div>
        </div> -->

        <div class="container-fluid page-header p-0" style="background-image: url(assets/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-0 mt-2 fw-normal animated slideInDown">
                        <?php
                        // Mendapatkan nama halaman saat ini
                        $currentPage = basename($_SERVER['PHP_SELF'], ".php");

                        // Menentukan judul berdasarkan halaman
                        switch ($currentPage) {
                            case "index":
                                echo "Home";
                                break;
                            case "about":
                                echo "About Us";
                                break;
                            case "fasilitas":
                                echo "Our Facilities";
                                break;
                            case "rooms":
                                echo "Rooms";
                                break;
                            case "booking":
                                echo "Booking";
                                break;
                            case "team":
                                echo "Our Team";
                                break;
                            case "testimoni":
                                echo "Our Testimonials";
                                break;
                            case "login":
                                echo "Login";
                                break;
                            case "register":
                                echo "Register";
                                break;
                            default:
                                echo "Welcome";
                                break;
                        } 
                        ?>
                    </h1>
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