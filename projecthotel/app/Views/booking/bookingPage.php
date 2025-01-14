
<head>
    <meta charset="utf-8">
    <title>TOMAN Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min')}}.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button 
    {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <!-- Header Start -->
        
        <!-- Header End -->


        <!-- Page Header Start -->
       
        <!-- Page Header End -->


    

        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container mb-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Booking Ruangan</h6>
                    <h1 class="mb-5">Booking Online <span class="text-primary text-uppercase">SEKARANG</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <!-- <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{asset('assets/img/about-1.jpg')}}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{asset('assets/img/about-2.jpg')}}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{asset('assets/img/about-3.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{asset('assets/img/about-4.jpg')}}">
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="post" action="/book" target="_blank">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Nama Pemesan" name="name">
                                            <label for="name">Nama Pemesan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="date" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" name="checkin" />
                                            <label for="checkin">Tanggal Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="date" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" name="checkout" />
                                            <label for="checkout">Tanggal Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1" name="jumlah">
                                            <option value="1">1 Kamar</option>
                                            <option value="2">2 Kamar</option>
                                            <option value="3">3 Kamar</option>
                                            <option value="4">4 Kamar</option>
                                            <option value="5">5 Kamar</option>
                                            <option value="6">6 Kamar</option>
                                            <option value="7">7 Kamar</option>
                                            <option value="8">8 Kamar</option>
                                            <option value="9">9 Kamar</option>
                                            <option value="10">10 Kamar</option>
                                            <option value="11">11 Kamar</option>
                                            <option value="12">12 Kamar</option>
                                            <option value="13">13 Kamar</option>
                                            <option value="14">14 Kamar</option>
                                            <option value="15">15 Kamar</option>
                                            <option value="16">16 Kamar</option>
                                            <option value="17">17 Kamar</option>
                                            <option value="18">18 Kamar</option>
                                            <option value="19">19 Kamar</option>
                                            <option value="20">20 Kamar</option>
                                            <option value="21">21 Kamar</option>
                                            <option value="22">22 Kamar</option>
                                            <option value="23">23 Kamar</option>
                                            <option value="24">24 Kamar</option>
                                            <option value="25">25 Kamar</option>
                                            </select>
                                            <label for="select1">Jumlah Kamar</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2" name="jenis">
                                              <option value="Superior">Superior</option>
                                              <option value="Family">Family</option>
                                              <option value="Suite">Suite</option>
                                              <option value="Twin">Twin</option>
                                              <option value="Standard">Standard</option>
                                              <option value="Deluxe">Deluxe</option>
                                              <option value="Executive">Executive</option>
                                              <option value="Junior">Junior</option>
                                              <option value="Connecting">Connecting</option>
                                            </select>
                                            <label for="select2">Tipe Kamar</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="number" class="form-control datetimepicker-input" id="nomer" placeholder="Nomor Handphone" name="nomer" />
                                            <label for="nomer">Nomor Handphone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="tamu" placeholder="Nama Tamu" name="tamu" />
                                            <label for="tamu">Nama Tamu</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" target="_blank">Konfirmasi Pemesanan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Newsletter Start -->
         <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
       
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>