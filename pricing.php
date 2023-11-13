<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <style>
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

    /* Standard Package Card */
.standard-package-card {
    background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
    backdrop-filter: blur(2px);
    border-radius: 10px;
}

/* Premium Package Card */
.premium-package-card {
    background: linear-gradient(180deg, rgba(100, 100, 100, 0.25) 0%, rgba(100, 100, 100, 0.00) 100%);
    backdrop-filter: blur(2px);
    border-radius: 10px;
}

/* Fitness Enthusiast Package Card */
.fitness-enthusiast-card {
    background: linear-gradient(180deg, rgba(30, 30, 30, 0.25) 0%, rgba(30, 30, 30, 0.00) 100%);
    backdrop-filter: blur(2px);
    border-radius: 10px;
}

/* Family Fitness Package Card */
.family-fitness-card {
    background: linear-gradient(180deg, rgba(120, 120, 120, 0.25) 0%, rgba(120, 120, 120, 0.00) 100%);
    backdrop-filter: blur(2px);
    border-radius: 10px;
}

/* Corporate Wellness Package Card */
.corporate-wellness-card {
    background: linear-gradient(180deg, rgba(70, 70, 70, 0.25) 0%, rgba(70, 70, 70, 0.00) 100%);
    backdrop-filter: blur(2px);
    border-radius: 10px;
}

/* Senior Citizen Wellness Package Card */
.senior-citizen-card {
    background: linear-gradient(180deg, rgba(40, 40, 40, 0.25) 0%, rgba(40, 40, 40, 0.00) 100%);
    backdrop-filter: blur(2px);
    border-radius: 10px;
}

/* Customized Button Styles for Standard Package */
.standard-package-card .btn {
    background-color: #F66844;
    border: 1px solid #F66844;
    border-radius: 10px;
    color: white;
}

.standard-package-card .btn:hover {
    background-color: transparent;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
}

/* Customized Button Styles for Premium Package */
.premium-package-card .btn {
    background-color: #f0ad4e;
    border: 1px solid #f0ad4e;
    border-radius: 10px;
    color: white;
}

.premium-package-card .btn:hover {
    background-color: transparent;
    border: 1px solid #f0ad4e;
    border-radius: 10px;
    color: white;
}

/* Button Styles for Fitness Enthusiast Package */
.fitness-enthusiast-card .btn {
    background-color: #007BFF;
    border: 1px solid #007BFF;
    border-radius: 10px;
    color: white;
}

.fitness-enthusiast-card .btn:hover {
    background-color: transparent;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
}

/* Button Styles for Family Fitness Package */
.family-fitness-card .btn {
    background-color: #FF5733;
    border: 1px solid #FF5733;
    border-radius: 10px;
    color: white;
}

.family-fitness-card .btn:hover {
    background-color: transparent;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
}

/* Button Styles for Corporate Wellness Package */
.corporate-wellness-card .btn {
    background-color: #138496;
    border: 1px solid #138496;
    border-radius: 10px;
    color: white;
}

.corporate-wellness-card .btn:hover {
    background-color: transparent;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
}

/* Button Styles for Senior Citizen Wellness Package */
.senior-citizen-card .btn {
    background-color: #6A8A82;
    border: 1px solid #6A8A82;
    border-radius: 10px;
    color: white;
}

.senior-citizen-card .btn:hover {
    background-color: transparent;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
}


    .swiper-slide{
        background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
        backdrop-filter: blur(2px);
    }

    .swiper-pagination-bullet-active{
        background-color: #F66844;
    }

    </style>
    <title>Gym Website</title>
</head>
<body class="bg-black">
    <?php require('inc/header.php');?> 
    
      <!-- Pricing -->
    <h3 class="h-font fw-bold text-center mt-5 text-white">PRICING</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                    <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body standard-package-card">
                        <h5 class="card-title text-white">Standard Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 5000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Access to all gym facilities</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Personalized workout plans</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Nutritional counseling</p>
                        <p class="text-white"><i class="bi bi-x text-danger"></i> Spa and sauna access</p>
                        <div class="d-grid gap-2">
                            <a href="pay-now.php?price=5000&package=Standard Package" class="btn subscribe">Subscribe</a>
                        </div>
                    </div>
                    </div>
            </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body premium-package-card">
                        <h5 class="card-title text-white">Premium Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 8000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Access to all gym facilities</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Personal trainer guidance</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Nutritionist consultation</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Spa and sauna access</p>
                        <div class="d-grid gap-2">
                            <a href="pay-now.php?price=8000&package=Premium Package" class="btn subscribe">Subscribe</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body fitness-enthusiast-card">
                        <h5 class="card-title text-white">Fitness Enthusiast Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 10000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Unlimited gym access</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Personalized training programs</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Nutritional guidance</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Group fitness classes</p>
                        
                        <div class="d-grid gap-2">
                            <a href="pay-now.php?price=10000&package=Fitness Enthusiast" class="btn subscribe">Subscribe</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body family-fitness-card">
                        <h5 class="card-title text-white">Family Fitness Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 15000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Family access to gym facilities</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Individualized family workout plans</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Nutritionist consultations for the family</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Group family fitness sessions</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Personal trainer guidance</p>
                        <div class="d-grid gap-2">
                            <a href="pay-now.php?price=15000&package=Family Fitness" class="btn subscribe">Subscribe</a>
                        </div>
                    </div>
                    </div>
            </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card pay-card" style="width: 18rem; margin:auto;">
                    <div class="card-body corporate-wellness-card">
                        <h5 class="card-title text-white">Corporate Wellness Package</h5>
                        <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 12000</h6>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Gym access for company employees</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Customized corporate fitness programs</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Nutrition workshops for employees</p>
                        <p class="text-white"><i class="bi bi-check text-warning"></i> Team-building fitness events</p>
                        <div class="d-grid gap-2">
                            <a href="pay-now.php?price=12000&package=Corporate Wellness" class="btn subscribe">Subscribe</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card pay-card" style="width: 18rem; margin:auto;">
                        <div class="card-body senior-citizen-card">
                            <h5 class="card-title text-white">Senior Citizen Wellness Package</h5>
                            <h6 class="card-subtitle mb-2" style="color: rgba(255, 255, 255, 0.50);">Rs. 3000</h6>
                            <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Specialized senior fitness programs</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Health assessments and monitoring</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Social fitness activities</p>
                            <p class="text-white"><i class="bi bi-check text-warning"></i> Senior yoga and meditation classes</p>
                            <div class="d-grid gap-2">
                                <a href="pay-now.php?price=3000&package=Senior Citizen Wellness" class="btn subscribe">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        
    </div>

    <?php require('inc/footer.php');?>
</body>
</html>