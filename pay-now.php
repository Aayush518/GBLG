<?php
    if(isset($_GET['price']) && isset($_GET['package'])){
        $price = $_GET['price'];
        $plan = $_GET['package'];

        $container ="
            <div>
                <h1 class='text-center text-white fs-4 h-font my-3'>$plan Package</h1>
            </div>
            <form id='pay-now' method='post' enctype='multipart/form-data'>
                <div class='d-flex gap-2'>
                    <div class='col-xs-3 mb-3 my-3 w-50'>
                        <label for='fname' class='form-label text-white'>First Name</label>
                        <input type='text' name='fname' class='form-control shadow-none' placeholder='First Name' required>
                    </div>
                    <div class='col-xs-3 mb-3 my-3 w-50'>
                        <label for='lname' class='form-label text-white'>Last Name</label>
                        <input type='text' name='lname' class='form-control shadow-none' placeholder='Last Name' required>
                    </div>
                </div>
                    <div class='mb-3'>
                        <label for='email' class='form-label text-white'>Email</label>
                        <input type='email' class='form-control shadow-none' name='email'  placeholder='Email' required>
                    </div>
                    <div class='mb-3'>
                        <label for='phone' class='form-label text-white'>Phone</label>
                        <input type='tel' class='form-control shadow-none' name='phone' pattern='^\+\d{1,4}\s\d{6,14}$' required placeholder='+1 1234567890'>
                    </div>
                    <div class='mb-3'>
                        <label for='image' class='form-label text-white'>Upload Payment Screenshot</label>
                        <input type='file' name='image' class='form-control shadow-none' accept='image/*' required>
                    </div>
                    <div class='mb-3 d-grid'>
                        <button class='btn btn-1 shadow-none' type='submit'>Payment Done?</button>
                    </div>
            </form>";
    }
    else{
        header('location: pricing.php');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $to = 'adhikareeprayush@gmail.com'; // Replace with the recipient's email address
        $subject = 'Payment Form Submission';
        
        // Get form data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        // File upload handling
        $uploadDir = 'uploads/'; // Create a directory to store uploaded files
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            // File upload successful
        } else {
            echo 'Error uploading file.';
            exit;
        }
        
        // Email headers
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'MIME-Version: 1.0' . "\r\n" .
                   'Content-Type: multipart/mixed; boundary="mixed_boundary"';
        
        // Email message
        $message = "--mixed_boundary\r\n";
        $message .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= "First Name: $fname<br>";
        $message .= "Last Name: $lname<br>";
        $message .= "Email: $email<br>";
        $message .= "Phone: $phone<br><br>";
        
        // Attach the image
        $message .= "--mixed_boundary\r\n";
        $message .= "Content-Type: application/octet-stream; name=\"" . basename($uploadFile) . "\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment\r\n\r\n";
        $message .= chunk_split(base64_encode(file_get_contents($uploadFile))) . "\r\n";

        // Send the email
        mail($to, $subject, $message, $headers);
        
        // Delete the uploaded image (optional)
        unlink($uploadFile);
        
    }
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Gym Website - Pay Now</title>
    <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("mDcS3vBRpQgShnT68");
        })();
    </script>
<style>
    .pay-container{
            background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
            backdrop-filter: blur(2px);
            border-radius: 10px;
    }


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


    <div class="container">
        <div class="row justify-content-around align-items-center">

            <div class="col-lg-6 col-md-6 pay-container p-4">
                <?php echo $container;?>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/qr.png" class="card-img-top w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5"><?php echo $plan ?> Package</h5>
                        <p class="card-text">Rs. <?php echo $price ?> Only.</p>
                        <div class="d-grid">
                            <a href="images/qr.png" download="images/qr.jpg" class="btn btn-3">Download Qr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





 <?php require('inc/footer.php');?>

</body>

</html>