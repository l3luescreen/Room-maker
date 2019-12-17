<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://tiny.cc/linkoone">
        <script src="https://tiny.cc/linkotwo"></script>
        <script src="https://tiny.cc/linkothr"></script>
        <title>Classroom Management System</title>
    </head>

    <body>
        <!--first row of website-->
    <div class="container-fluid">
        <div class="row" style="background-color:#ABABBA;">

            <div class="col">
                <h1 style="font-family:Lucida Calligraphy, Sans-Serif;font-size:28px;text-align:center">Classroom management site</h1>
                
                <p style="font-size:20px;text-align:center;">
                    >>Please Log in
                </p>

            </div>
            </div>
            <div class="row" style="text-align:center;"><?php require 'loginregister/login.php'?></div>
            <div class="row" style="text-align:center;"><?php require 'loginregister/register.php'?></div>
        </div>

    </body>
</html> 