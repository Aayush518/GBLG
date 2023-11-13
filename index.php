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
        background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
        backdrop-filter: blur(2px);
        border-radius: 10px;
    }

    .subscribe-gold{
        background-color: #F66844;
        border: 1px solid #F66844;
        border-radius: 10px;
    }
    .subscribe{
        background-color: white;
        border: 1px solid black;
        border-radius: 10px;
        color:black;
    }

    .subscribe:hover{
        background-color: transparent;
        border: 1px solid white;
        border-radius: 10px;
        color:white;
    }

    .subscribe-gold{
        background-color: #f0ad4e;
        border: 1px solid #f0ad4e;
        border-radius: 10px;
        color:white;
    }

    .subscribe-gold:hover{
        background-color: transparent;
        border: 1px solid #f0ad4e;
        border-radius: 10px;
        color:white;
    }

    .swiper-slide{
        background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
        backdrop-filter: blur(2px);
    }

    .swiper-pagination-bullet-active{
        background-color: #F66844;
    }

    @media screen and (max-width: 768px) {
        .card-1{
            border-bottom: none;
            border-right: none;
        }
        .card-2{
            border-bottom: none;
            border-right: none;
        }
        .card-3{
            border-bottom: none;
            border-right: none;
        }
    }
    </style>
</head>
<body class="bg-black">    
    <?php require('inc/header.php');?> 

    <!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel" slide data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/carousel/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome to the FlexGym</h5>
                <p>Strength doesn't come from what you can do; it comes from overcoming the things you once thought you couldn't.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/carousel/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Discover Your Inner Power at Flex Gym</h5>
                <p>The only bad workout is the one that didn't happen.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/carousel/3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Transform Your Body and Mind at Flex Gym</h5>
                <p>Believe in yourself, and you will be unstoppable.</p>
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
    <h3 class="h-font fw-bold text-center mt-5 text-white">Fitness Planning & <span class="text-warning h-font fw-bold">Nutrituion</span></h3>
    <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3 col-sm-6 d-flex flex-column card-1 p-3">
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
    <div class="container mt-5">
        <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
                <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title text-white">Normal Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-x text-danger"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn subscribe">Subscribe</a>
                            </div>
                    </div>
                </div>
        </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Gold Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn subscribe-gold">Subscribe</a>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title text-white">Normal Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <p class="text-white"><i class="bi bi-x text-danger"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn subscribe">Subscribe</a>
                            </div>
                    </div>
                </div>
        </div>


        </div>
    </div>


    <!-- Testimonials -->
    <h3 class="h-font fw-bold text-center text-white mt-5">TESTIMONIALS</h3>
    <div class="container mt-5">
        <div class="swiper mySwiper swipper-testimonials">
            <div class="swiper-wrapper mb-4">
                <div class="swiper-slide p-4 rounded">
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
                <div class="swiper-slide p-4 rounded">
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
                <div class="swiper-slide p-4 rounded">
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