<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Header.css">

    <style type="text/css">
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #050A30;
            color: white;
        }
    </style>
</head>

<body class="intro">
    <?php
    include 'Connection.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include 'Header.php';
    ?>
    <div class="container">
        <h2 class="text-center pt-4" style="font-family: times new roman; color:black;">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2" style="color:black;" >Id</th>
                                <th scope="col" class="text-center py-2" style="color:black;" >Name</th>
                                <th scope="col" class="text-center py-2" style="color:black;" >E-Mail</th>
                                <th scope="col" class="text-center py-2" style="color:black;" >Balance</th>
                                <th scope="col" class="text-center py-2" style="color:black;" >Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="py-2"><?php echo $rows['Sid'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="SelectUser.php?Sid= <?php echo $rows['Sid']; ?>"> <button type="button" class="btn">Transfer</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
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