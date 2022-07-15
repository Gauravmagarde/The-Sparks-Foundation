<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Header.css">
    <title>Banking System</title>
</head>

<body class="intro">
    <?php
    include 'Header.php';
    ?>
    <div class="container-fluid ">
        <div class="row py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="color: black;">
                    <h3 style="color: black; font-family:times new roman;">Welcome to</h3>
                    <h1 style="color: black; font-family:times new roman;">SPARKS BANK</h1>
                </div>
            </div>
        </div>
        <div class="row activity text-center">
            <div class="col-md act">
                <img src="Images/user.jpg" style="width:420px; height:420px; border-radius:25px;" class="img-fluid">
                <br>
                <br>
                <a href="Registration.php"><button>Create a User</button></a>
            </div>
            <div class="col-md act">
                <img src="Images/TransferMoney.jpg" style="width:420px; height:420px; border-radius:25px;" class="img-fluid">
                <br>
                <br>
                <a href="TransferMoney.php"><button>Make a Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="Images/TransferHistory.jpg" style="width:420px; height:420px; border-radius:25px;" class="img-fluid">
                <br>
                <br>
                <a href="TransferHistory.php"><button>Transaction History</button></a>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2 fixed-bottom">
        <p style="font-family: times new roman; color:Black;">Copyright 2022, Project Developed by <b>GAURAV V. MAGARDE</b> <br> The Sparks Foundation</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>