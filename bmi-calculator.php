<?php 
    //accept the gender height and weight from the form and calculate the bmi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $index=0;

        //roundoff bmi to 2 decimal places
        $bmi = round($weight / ($height * $height), 3);

        if($bmi < 18.5){
            $status = "Underweight";
            $index = 1;
        }
        else if($bmi >= 18.5 && $bmi <= 24.9){
            $status = "Normal";
            $index = 2;
        }
        else if($bmi >= 25 && $bmi <= 29.9){
            $status = "Overweight";
            $index = 3;
        }
        elseif($bmi >= 30){
            $status = "Obese";
            $index = 4;
        }
        else{
            $status = "Severly Obese";
            $index = 5;
        }

        $result="
        <div class='col-lg-6 col-md-6 flex-column justify-content-around mt-lg-0 mt-md-5 p-3'>
            <div class=' bmi-box'>
                    <table>
                        <tr>
                            <th>BMI</th>
                            <th>Index</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>$bmi</td>
                            <td>$index</td>
                            <td>$status</td>
                        </tr>
                    </table>
                        <h6 class='text-white my-3'> Five ways to boost your BMI:</h6>
                        <ul>
                            <li class='text-white'>Increase your caloric intake</li>
                            <li class='text-white'>Increase your protein intake</li>
                            <li class='text-white'>Increase your intake of carbs and fat</li>
                            <li class='text-white'>Increase your intake of energy-dense foods</li>
                            <li class='text-white'>Avoid smoking, and if you smoke, consider quitting</li>
                        </ul>
                    <p>For more information in BMI and how to boost it <a class='text-dark text-decoration-none' href='https://www.cdc.gov/healthyweight/assessing/bmi/adult_bmi/index.html'>Click Here</a></p>
            </div>
        </div>
        ";
        }
        else{
            $result="";
        }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Gym Website</title>
    <style>
         input{
            background-color: transparent !important;
            border: 1px solid white;
            border-radius: 10px;
            color:#F66844 !important;
        }

        input::placeholder{
            color:#F66844 !important;
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

        .form-select{
            background-color: transparent !important;
            border: 1px solid white;
            border-radius: 10px;
            color:#F66844 !important;
        }

        .bmi-box{
            background: linear-gradient(90deg, #F66844 0%, #FF921B 100%);
            border-radius: 10px;
            padding:8px;
            color:white;
            border:1px solid #F66844;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border:1px solid white;
        }

        th {
            background-color: #F66844;
            color: white;
        }

        .form-container{
            background: linear-gradient(180deg, rgba(57, 57, 57, 0.25) 0%, rgba(57, 57, 57, 0.00) 100%);
            backdrop-filter: blur(2px);
            border-radius: 10px;
        }

    </style>
</head>
<body class="bg-black">
    <?php require('inc/header.php');?> 
    <h1 class="h-font text-center mt-5 text-white">Lets Calculate Your BMI</h1>
    <p class="text-center text-white">We will help you to calculate your bmi and provide you some suggestions.</p>

    <div class="container my-5">
        <div class="row justify-content-around">
                <div class="col-lg-3 col-md-3 form-container p-3">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="mb-3">
                        <label for="gender" class="form-label text-white">Gender</label>
                        <select name="gender" id="gender" class="form-select shadow-none">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="height" class="form-label text-white">Height in M</label>
                        <input type="text" name="height" id="height" class="form-control shadow-none" placeholder="Height" required>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label text-white">Weight in Kg</label>
                        <input type="text" name="weight" id="weight" class="form-control shadow-none" placeholder="Weight" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-sub">Submit</button>
                    </div>
                </form>

                </div>
                <?php echo $result;?>
        </div>
    </div>

    <?php require('inc/footer.php');?>
</body>

</html>