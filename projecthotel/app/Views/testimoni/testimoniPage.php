 <!-- Testimonial Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Testimoni Kami</h6>
            <h1 class="mb-5">Jelajahi <span class="text-primary text-uppercase">Testimoni</span> Kami</h1>
        </div>
        <div class="container-fluid bg-body-tertiary py-3 mt-5">
            <div id="testimonialCarousel" class="carousels">
                <div class="carousel-inners">
                    <div class="carousel-items active">
                        <div class="card shadow-sm rounded-3 p-2">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content."</p>
                                <div class="d-flex align-items-center pt-4">
                                    <img src="/assets/img/testimonial-1.jpg" alt="testi1">
                                    <div>
                                        <h5 class="card-title fw-bold">Jane Doe</h5>
                                        <span class="text-secondary">CEO, Example Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-items">
                        <div class="card shadow-sm rounded-3 p-2">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content."</p>
                                <div class="d-flex align-items-center pt-4">
                                    <img src="/assets/img/testimonial-2.jpg" alt="testi2">
                                    <div>
                                        <h5 class="card-title fw-bold">June Doe</h5>
                                        <span class="text-secondary">CEO, Example Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-items">
                        <div class="card shadow-sm rounded-3 p-2">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content."</p>
                                <div class="d-flex align-items-center pt-4">
                                    <img src="/assets/img/testimonial-3.jpg" alt="testi3">
                                    <div>
                                        <h5 class="card-title fw-bold">John Doe</h5>
                                        <span class="text-secondary">CEO, Example Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-items">
                        <div class="card shadow-sm rounded-3 p-2">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content."</p>
                                <div class="d-flex align-items-center pt-4">
                                    <img src="/assets/img/testimonial-1.jpg" alt="testi4">
                                    <div>
                                        <h5 class="card-title fw-bold">Card title 4</h5>
                                        <span class="text-secondary">CEO, Example Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-items">
                        <div class="card shadow-sm rounded-3 p-2">
                            <div class="quotes display-2 text-body-tertiary">
                                <i class="bi bi-quote"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">"Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content."</p>
                                <div class="d-flex align-items-center pt-4">
                                    <img src="/assets/img/testimonial-3.jpg" alt="testi5">
                                    <div>
                                        <h5 class="card-title fw-bold">Card title 5</h5>
                                        <span class="text-secondary">CEO, Example Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prevs" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-nexts" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container-xl py-5"></div>
<div class="container-xxl py-5"></div>
<!-- Testimonial End -->

<script>
    const multipleItemCarousel = document.querySelector("#testimonialCarousel");
    if (window.matchMedia("(min-width:576px)").matches) {
        const carousel = new bootstrap.Carousel(multipleItemCarousel, {
            interval: false,
        });

        var carouselWidth = $(".carousel-inners")[0].scrollWidth;
        var cardWidth = $(".carousel-items").width();

        var scrollPosition = 0;

        $(".carousel-control-nexts").on("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
            console.log("next");
            scrollPosition = scrollPosition + cardWidth;
            $(".carousel-inners").animate({ scrollLeft: scrollPosition }, 800);
            }
        });
        $(".carousel-control-prevs").on("click", function () {
            if (scrollPosition > 0) {
            scrollPosition = scrollPosition - cardWidth;
            $(".carousel-inners").animate({ scrollLeft: scrollPosition }, 800);
            }
        });
    } else {
        $(multipleItemCarousel).addClass("slide");
    }
</script>