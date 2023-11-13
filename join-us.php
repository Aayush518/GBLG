<?php
if(isset($_GET['login'])){
    $login = $_GET['login'];
    if($login==0){
        $from = "<div class='col-lg-6 col-md-6 p-5'>
        <form action=''>
            <div class='mb-3'>
                <label for='email' class='form-label text-white'>Email</label>
                <input type='email' class='form-control' id='email' placeholder='Enter Your Email'>
            </div>
            <div class='mb-3'>
                <label for='password' class='form-label text-white'>Password</label>
                <input type='password' class='form-control' id='password' placeholder='Enter Your Password'>
            </div>
            <p class='text-white text-center'>Havent Registered Yet? <a class='text-decoration-none text-warning' href='join-us.php?login=1'>Register Here</a></p>
            <div class='d-grid'>
                <button class='btn btn-3'>Login</button>
            </div>
        </form>
    </div>";
    }
else{
        $from = "<div class='col-lg-6 col-md-6 p-5'>
        <form action=''>
            <div class='mb-3'>
                <label for='full-name' class='form-label text-white'>Full Name</label>
                <input type='full-name' class='form-control' id='first-name' placeholder='Enter Your Full Name'>
            </div>
            <div class='mb-3'>
                <label for='phone' class='form-label text-white'>Phone</label>
                <input type='tel' class='form-control' id='phone' placeholder='Enter Your Phone Number'>
            </div>
            <div class='mb-3'>
                <label for='email' class='form-label text-white'>Email</label>
                <input type='email' class='form-control' id='email' placeholder='Enter Your Email'>
            </div>
            <div class='mb-3'>
                <label for='password' class='form-label text-white'>Password</label>
                <input type='password' class='form-control' id='password' placeholder='Enter Your Password'>
            </div>
            <div class='mb-3'>
                <label for='cpassword' class='form-label text-white'>Confirm Password</label>
                <input type='cpassword' class='form-control' id='cpassword' placeholder='Re-enter Your Password'>
            </div>
            <p class='text-white text-center'>Alreay Registered? <a class='text-decoration-none text-warning' href='join-us.php?login=0'>Login Here</a></p>
            <div class='d-grid'>
                <button class='btn btn-3'>Register</button>
            </div>
        </form>
    </div>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Gym Website - Join Us</title>
    <style>
        .btn-3{
            background: linear-gradient(90deg, #F66844 0%, #FF921B 100%);
            border-radius: 10px;
            padding:8px;
            color:white;
            border:1px solid #F66844;
            transition: all 1s ease-in-out;
        }

        .btn-3:hover{
            background: transparent;
            border-radius: 10px;
            padding:8px;
            color:white;
            border:1px solid #F66844;
        }
    </style>
</head>
<body class="bg-black">
    <?php require('inc/header.php');?>
    <h1 class="h-font fs-2 text-white text-center my-3">Join Us By Creating Account</h1>
    <p class="text-white text-center">If you are already a registered user please login</p>
    <div class="contianer">
        <div class="row justify-content-center">
            <?php echo $from;?>
        </div>
    </div>


    <?php require('inc/footer.php');?>
</body>

</html>

