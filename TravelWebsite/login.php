<?php
include('includes/dbconnection.php');
include('nav.php');

?>


<html>
    <head>
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/landing-page.min.css" rel="stylesheet">
                
        <style>
            .a{
                height:50px;
                width:80%;
                border-radius:10px;
                margin-left: 10%;
                box-shadow:2px 2px 2px gray;
            }
            .b{
                height:50px;
                width:80%;
                border-radius:10px;
                margin-left: 10%;
                margin-top: 50px;
                background-color:rgb(39, 84, 39);
                font-size:25px;
                color:white;
                box-shadow:2px 2px 2px gray;
            }
            .error {
                color: #FF0001;
                margin-left: 10%;
                font-size:18px;
            }
            .c{
                margin-left: 10%;
            }

        </style>
        
    </head>
    <body style="background-image: url('img/img11.jpg');background-repeat: no-repeat;height:800px;width:100%;background-attachment: fixed;  
  background-size: cover;">
    <br><br><br><br>
    
        <div style="margin-left:30%;height:auto;width:45%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
            <form method="get" action="">
                <h1 style="margin-left:30%;color:rgb(109, 123, 115)"> Login Form </h1><br>
                <div>
                    <input type="email" name="email" placeholder=" Email Address " required class="a" /><br>
                </div><br>

                <div>
                    <input type="password" name="password" placeholder="Enter Password " required class="a" /><br>
                </div><br>

                <button type="submit" name="submit" class="b"> Login </button>
            </form><br>
        </div><br><br><br><br>

        <!-- Footer -->
        <footer class="footer bg-light">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            
                <p class="text-muted small mb-4 mb-lg-0">&copy; CAMS 2020. All Rights Reserved.</p>
                </div>
        
            </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        
    </body>
</html>

<?php
    if(isset($_GET['submit']))
    {
        
            
            $email=$_GET['email'];
            $password=$_GET['password'];

            
            
                $sql = "select * from `Register` where Email='$email' && Password='$password'";
                
                
                $query=mysqli_query($con, $sql);
                $res=mysqli_fetch_array($query);
                
                if ($res) 
                {
                    //  echo '<script>alert("successfully Login")</script>';
                    //  header("Location: http://TravelWebsite/TBooking.php", true, 301);
                    //  exit();
                    echo '<script>window.location="TBooking.php";</script>';
                }
                else
                {
                    echo '<script>alert("Password not match. Please try again")</script>';
                }
    }      
        
?>