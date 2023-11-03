<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Gym Website</title>
    <style>
        .bmi-calculator{
            position: relative;
            margin-top:-50px;
            z-index:2;
        }
    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    .swiper-slide img {
      display: block;
      width: 30px;
    }

    .card-1{
        border-radius:0px;
        border-bottom: 1px solid #F66844;
        border-right: 1px solid #F66844;
    }

    .card-2{
        border-radius:0px;
        border-bottom: 1px solid #F66844;
    }

    .card-3{
        border-radius:0px;
        border-right: 1px solid #F66844;
    }

    .pay-card{
        background:transparent;
        border: 1px solid #F66844;
        border-radius: 10px;
    }
    .pay-card1{
        background:#FFD700;
        border: 1px solid #FFD700;
        border-radius: 10px;
    }

    .subscribe-gold{
        background-color: #F66844;
        border: 1px solid #F66844;
        border-radius: 10px;
    }
    .subscribe{
        background-color: black;
        border: 1px solid #black;
        border-radius: 10px;
    }


    </style>
</head>
<body class="bg-black">    
    <?php require('inc/header.php');?> 

    <!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/carousel/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/carousel/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/carousel/3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    <!-- Fitness Planning and Nutrition  -->
    <h3 class="h-font fw-bold text-center mt-5 text-white mb-5">Fitness Planning and Nutrituion</h3>
    <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-6  d-flex flex-column card-1 p-3">
                    <img src="images/features/1.svg" width="55px" class="rounded mx-auto d-block" alt="...">
                    <h6 class="text-center my-2 text-white">Community</h6>
                    <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iure, suscipit error, aut impedit, placeat nostrum labore architecto dolorem aperiam nam ullam autem doloribus. Earum dolorem optio impedit porro maxime.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  d-flex flex-column card-1 p-3">
                    <img src="images/features/2.svg" width="55px" class="rounded mx-auto d-block" alt="...">
                    <h6 class="text-center my-2 text-white">Community</h6>
                    <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iure, suscipit error, aut impedit, placeat nostrum labore architecto dolorem aperiam nam ullam autem doloribus. Earum dolorem optio impedit porro maxime.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  d-flex flex-column card-2 p-3">
                    <img src="images/features/3.svg" width="55px" class="rounded mx-auto d-block" alt="...">
                    <h6 class="text-center my-2 text-white">Community</h6>
                    <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iure, suscipit error, aut impedit, placeat nostrum labore architecto dolorem aperiam nam ullam autem doloribus. Earum dolorem optio impedit porro maxime.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-6 d-flex flex-column card-3 p-3">
                    <img src="images/features/1.svg" width="55px" class="rounded mx-auto d-block" alt="...">
                    <h6 class="text-center my-2 text-white">Community</h6>
                    <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iure, suscipit error, aut impedit, placeat nostrum labore architecto dolorem aperiam nam ullam autem doloribus. Earum dolorem optio impedit porro maxime.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  d-flex flex-column card-3 p-3">
                    <img src="images/features/2.svg" width="55px" class="rounded mx-auto d-block" alt="...">
                    <h6 class="text-center my-2 text-white">Community</h6>
                    <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iure, suscipit error, aut impedit, placeat nostrum labore architecto dolorem aperiam nam ullam autem doloribus. Earum dolorem optio impedit porro maxime.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  d-flex flex-column p-3">
                    <img src="images/features/3.svg" width="55px" class="rounded mx-auto d-block" alt="...">
                    <h6 class="text-center my-2 text-white">Community</h6>
                    <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa iure, suscipit error, aut impedit, placeat nostrum labore architecto dolorem aperiam nam ullam autem doloribus. Earum dolorem optio impedit porro maxime.</p>
                </div>
            </div>
    </div>


    <!-- Pricing -->
    <h3 class="h-font fw-bold text-center mt-5 text-white">PRICING</h3>
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
                <div class="card pay-card1" style="width: 18rem; margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title">Normal Package</h5>
                        <h6 class="card-subtitle mb-2" style="color:#F66844;">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn subscribe text-white">Subscribe</a>
                            </div>
                    </div>
                </div>
        </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Gold Package</h5>
                        <h6 class="card-subtitle mb-2" style="color:#F66844;">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn subscribe-gold">Subscribe</a>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card pay-card1" style="width: 18rem; margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title">Normal Package</h5>
                        <h6 class="card-subtitle mb-2" style="color:#F66844;">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-primary"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn subscribe text-white">Subscribe</a>
                            </div>
                    </div>
                </div>
        </div>


        </div>
    </div>


    <!-- Testimonials -->
    <h3 class="h-font fw-bold text-center mt-5">TESTIMONIALS</h3>
    <div class="container mt-5">
        <div class="swiper mySwiper swipper-testimonials">
            <div class="swiper-wrapper mb-4">

                <div class="swiper-slide p-4 rounded"  style="background-color: #242c34;">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/users/1.jpg"  class="rounded-circle" loading="lazy" width="30px">
                        <span class="fw-bold m-0 ms-2 text-white">John Doe</span>
                    </div>
                    <p class="mt-3 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi repellendus magnam autem sed quo earum, quibusdam ullam vero voluptatum vel quas labore! Error molestias voluptatem iste ipsam sapiente doloribus ipsa?</p>
                    <div>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 rounded"  style="background-color: #242c34;">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/users/1.jpg"  class="rounded-circle" loading="lazy" width="30px">
                        <span class="fw-bold m-0 ms-2 text-white">John Doe</span>
                    </div>
                    <p class="mt-3 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi repellendus magnam autem sed quo earum, quibusdam ullam vero voluptatum vel quas labore! Error molestias voluptatem iste ipsam sapiente doloribus ipsa?</p>
                    <div>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 rounded"  style="background-color: #242c34;">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/users/1.jpg"  class="rounded-circle" loading="lazy" width="30px">
                        <span class="fw-bold m-0 ms-2 text-white">John Doe</span>
                    </div>
                    <p class="mt-3 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi repellendus magnam autem sed quo earum, quibusdam ullam vero voluptatum vel quas labore! Error molestias voluptatem iste ipsam sapiente doloribus ipsa?</p>
                    <div>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
                <div class="swiper-pagination"></div>
            </div>
    </div>
    




<script>
    document.getElementById("bmi_form").addEventListener("submit", function(e) {
    e.preventDefault();
    var height = parseFloat(document.getElementById("height").value);
    var weight = parseFloat(document.getElementById("weight").value);

    var bmi = weight / (height * height);

    // Update the value of an input element
    document.getElementById("bmi").value = "Your BMI: " + bmi.toFixed(2);
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      initialSlide: 2,
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
        delay : 1000,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
</script>


    <?php require('inc/footer.php');?>
</body>
</html>