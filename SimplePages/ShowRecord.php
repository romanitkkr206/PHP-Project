<?php
include('includes/dbconnection.php');
?>

<?php
include('nav.php');
?>
<html>
    <head>
        <title>Registation Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
       
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/landing-page.min.css" rel="stylesheet">
       
       
       <style>
            th {
                border: 2px solid black;
                }
            td {
                border: 1px solid black;
            }
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
                    background-color:rgba(20, 70, 143, 1);
                    font-size:25px;
                    color:white;
                    box-shadow:2px 2px 2px gray;
                }
        </style>
	</head>
    <body style="background-image: url('img/img1.jpg');background-repeat: no-repeat;height:1000px;width:100%;background-attachment: fixed;  
  background-size: cover;">   <br><br> <br><br><br><br>
    <form method="post" action="">
        <div style="margin-left:32%;height:auto;width:40%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
                <h1 style="margin-left:30%;color:rgb(109, 123, 115)"> Show Records </h1><br>
                <div>
                    <input type="number" name="id" placeholder=" Enter Id " class="a" />
                </div>
                <h3 style="margin-left:45%;color:rgb(109, 123, 115)">OR</h3>
                <div>
                    <input type="email" name="email" placeholder=" Enter Email Address " class="a" />
                </div>
                <button type="submit" name="show" class="b"> Show With Id or Email </button>
                <button type="submit" name="show1" class="b"> Show All Data </button>
            <br><br><br>
        </div>
    </form><br><br><br><br><br>

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
if(isset($_POST['show']))
{
    $id= $_POST['id'];
    $email = $_POST['email'];

        $sql = "SELECT Id,Name,Email, MobileNumber FROM Register where Id='$id' || Email ='$email' ";
        $result = mysqli_query($con, $sql);

        echo "<table border='2px solid black' width='100%' style='margin-left:5px;' >";
        echo '<tr>.<th>Id</th>.<th>Name</th>.<th>Email</th>.<th>MobileNumber</th>.</tr>';
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            foreach ($row as $field => $value) { 
                echo "<td>" . $value . "</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>
<?php
if(isset($_POST['show1']))
{
    $id= $_POST['id'];
            
        $sql = "SELECT Id,Name,Email, MobileNumber FROM Register ";
        $result = mysqli_query($con, $sql);

        echo "<table border='2px solid black' width='100%' style='margin-left:5px;' >";
        echo '<tr>.<th>Id</th>.<th>Name</th>.<th>Email</th>.<th>MobileNumber</th>.</tr>';
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            foreach ($row as $field => $value) { 
                echo "<td>" . $value . "</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>