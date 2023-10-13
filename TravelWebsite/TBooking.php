<?php
include('includes/dbconnection.php');
include('nav.php');
?>




<html>
<head>
<title>Ticket Booking Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/landing-page.min.css" rel="stylesheet">

<style>
///////////////////




div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

.ab {
  
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 90%;
  height:60px;
  margin-left: 5%;
  padding: 10px;
  box-shadow:2px 2px 2px gray;
  border-radius:10px;
}

.abc {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  width: 10%;
  height:20px;
  margin-left: 2%;
  padding: 10px;
  box-shadow:2px 2px 2px gray;
  
}

div.elem-group.inlined input {
    height:60px;
    width:80%;
    border-radius:10px;
    margin-left: 10%;
    box-shadow:2px 2px 2px gray;
}

textarea {
    height: 150px;
    width:90%;
    border-radius:10px;
    margin-left: 5%;
    box-shadow:2px 2px 2px gray;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 8px;
  cursor: pointer;
  margin-left: 5%;
}

button:hover {
  border: 2px solid black;
}
</style>
</head>
<body style="background-image: url('img/img11.jpg');background-repeat: no-repeat;height:800px;width:100%;background-attachment: fixed;  
  background-size: cover;">
    <br><br><br><br>
    
        <div style="margin-left:23%;height:auto;width:60%;border-radius:10px;box-shadow:2px 2px 2px gray;background-color:hsla(240, 8%, 88%, 0.305);font-size:25px;"><br>
        <form action="" method="post">
        <h1 style="margin-left:30%;color:rgb(169, 123, 115)"> Ticket Booking Form </h1><br>
            <div class="elem-group">
                <label for="name" style="margin-left:5%;">Your Name</label>
                <input class="ab" type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required  />
            </div><hr>
            <div class="elem-group">
                <label for="email" style="margin-left:5%;">Your E-mail</label>
                <input class="ab" type="email" id="email" name="email" placeholder="john.doe@email.com" required  />
            </div><hr>
            <div class="elem-group">
                <label for="phone" style="margin-left:5%;">Your Phone</label>
                <input  class="ab" type="tel" id="phone" name="mobile" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required  />
            </div><hr>
            <div class="elem-group">
                <label for="adult" style="margin-left:5%;"> Select Tour Package* </label>
                <select class="ab" style="margin-left:5%;" name="package">
                    <option value="Goa" >Goa</options>
                    <option value="Kashmir" >Kashmir</options>
                    <option value="Rajasthan" >Rajasthan</options>
                </select>
            </div><hr>

            <div class="elem-group">
                <label for="avrival-date" style="margin-left:5%;">Arrival date*:</label>
                <input  class="ab" type="date" id="avrival-date" name="date" required>
            </div><hr>

            <div class="elem-group">
                <label for="person" style="margin-left:5%;"> Number of persons*</label>
                <input class="ab" type="number" id="person" name="person" placeholder="2" min="0" required>
            </div><hr>
            

            <div class="elem-group" >
                <label for="room-selection" style="margin-left:5%;">What would you want to avail?*</label>
                &nbsp &nbsp &nbsp &nbsp &nbsp   Boarding<input class="abc" type="checkbox" name="boarding" value="boarding"  />
                &nbsp &nbsp &nbsp &nbsp   Fooding<input class="abc" type="checkbox" name="fooding" value="fooding"  />
                &nbsp &nbsp &nbsp &nbsp    Sight seeing<input class="abc" type="checkbox" name="sightseeing" value="sightseeing"/>
            </div>
            <hr>
            <div class="elem-group">
                <label for="message" style="margin-left:5%;">Discount Coupon code:</label>
                <input class="ab" id="code" name="code" placeholder="WELCOME20" required />
            </div><br>
            <button type="submit">Complete Reservation</button>
        </form><br><br>
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


if(isset($_POST['submit']))
    {
        
            $name=$_POST['name'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $package=$_POST['package'];
            $date=$_POST['date'];
            $person=$_POST['person'];
            $boarding=$_POST['boarding'];
            $fooding=$_POST['fooding'];
            $sightseeing=$_POST['sightseeing'];
            $code=$_POST['code'];

                $query = mysqli_query($con, "insert into tbooking(Id, Name, Email, MobileNumber, Package , Date , Person , Boarding, Fooding, Sightseeing, Code) 
                value('','$name', '$email', '$mobile', '$package', '$date', '$person','$boarding','$fooding','$sightseeing','$code')");
                
                if ($query) {
                    echo '<script>alert("successfully")</script>';
                    }
                else
                    {
                    echo '<script>alert("Something Went Wrong. Please try again")</script>';
                    }
              
    }
?>
