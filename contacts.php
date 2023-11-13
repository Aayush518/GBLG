<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Gym Website</title>
    <style>
        .contact-form{
            background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
            backdrop-filter: blur(2px);
            border-radius: 10px;
        }
        .btn-sub{
            background: linear-gradient(90deg, #F66844 0%, #FF921B 100%);
            border-radius: 10px;
            padding:8px;
            color:white;
            border:1px solid #F66844;
            transition: all 1s ease-in-out;
        }

        .btn-sub:hover{
            background: transparent;
            border-radius: 10px;
            padding:8px;
            color:white;
            border:1px solid #F66844;
        }
    </style>

        <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        </script>
        <script type="text/javascript">
        (function(){
            emailjs.init("mDcS3vBRpQgShnT68");
        })();
        </script>

</head>
<body class="bg-black">
    <?php require('inc/header.php');?> 
    
    <h3 class="h-font text-white text-center">Contact Us</h3>
    <p class="text-center text-white">Feel free to contact us. We are ready to help you.</p>
    
    <div class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-6 mb-5 px-4 contact-form p-3">
                <form id="contact-form" method="post">
                    <div class="d-flex gap-2">
                        <div class="col-xs-2 mb-3 my-3 w-50">
                            <label for="first-name" class="form-label text-white">First Name</label>
                            <input type="text" id="fname" class="form-control shadow-none" placeholder="First Name" required>
                        </div>
                        <div class="col-xs-2 mb-3 my-3 w-50">
                            <label for="last-name" class="form-label text-white">Last Name</label>
                            <input type="text" id="lname" class="form-control shadow-none" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" id="email" class="form-control shadow-none" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-white">Phone</label>
                        <input type="tel" id="phonenum" class="form-control shadow-none" pattern="^\+\d{1,4}\s\d{6,14}$" required placeholder="+1 1234567890">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-white">Message</label>
                        <textarea class="form-control shadow-none" id="message" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-sub shadow-none" id="send-button">Send Message</button>
                    </div>
                </form>
   
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?>
</body>

<script>

document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission behavior
        SendMail(); // Call your SendMail() function
});

function SendMail() {

    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var name = fname + " " + lname;

    var params = {
        name,
        email: document.getElementById('email').value,
        phonenum: document.getElementById('phonenum').value,
        message: document.getElementById('message').value
    }

    emailjs.send('service_p77iz7o', 'template_stpwzpo', params)
    .then(function(response) {
       console.log('SUCCESS!', response.status, response.text);
    }, function(error) {
       console.log('FAILED...', error);
    });

    document.getElementById('contact-form').reset();
}
</script>
</html>

