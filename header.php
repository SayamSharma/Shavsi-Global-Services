<!-- Database connection -->
<?php
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to failed due to" . mysqli_connect_error());
    }
//    echo "success connecting to the db";

    $name = $_POST['name'];
    
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $desc = $_POST['desc'];
 

    $sql =    "INSERT INTO `form_sub'.'form` ( `name`, `age`, `email`, `phno`, `desc`,'dt') VALUES ( '$name', '$email', '$phno', '$msg','current_timestamp());";
//    echo $sql;

    if($con->query($sql) == true){
        echo "successfully submitted";
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>
<!-- Database connection -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 30%;
  }
</style>
<link rel="stylesheet" href="css/bootstrap5.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<!-- quality clearity reliability. -->

<body>
  <!--navigation file starts from here-->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="navitems">
      <div class="container-fluid">
        <img src="images/logo.png" alt="shavsi logo" width="50px" height="50px">
        <a class="navbar-brand" href="index.php">&nbsp; Shavsi Global Services </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="technology.php">Technology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="learning.php">Learning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recruitment.php">Recruitment</a>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services</a>
              <div class="dropdown-menu dropdown-hover-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="http://admissiondreams.com/">Admission Dreams</a>
                <a class="dropdown-item" href="#">Media</a>
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="#">Mydia foundation</a>
                <a class="dropdown-item" href="#">Tabiir</a>
                <a class="dropdown-item" href="#">Films</a>
                <a class="dropdown-item" href="#">5AM Club</a>
              </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="career.php">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>

        </ul>
      </div>
      <!--  Navbar text with an inline element -->
      <!-- our clients ke baad testimonials
    recruitment aur baaki 1 page
  blog pe login for the posting 
career mey apply now for information
-->
    </div>
    </div>
  </nav>