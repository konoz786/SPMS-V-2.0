<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
      div {
   background-image:url('Beluga.png');
   background-repeat:repeat;
   background-attachment:fixed;
   background-size:30% 50%;
   background-position:top;
   background-color:grey;
   height: 100px;
   width: 1500px;
 
  }
 
  
  

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: center;
  }
  
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    /* Change the link color to #111 (black) on hover */
    li a:hover {
      background-color: navajowhite;
    }
    </style>

  </head>

  <body>
    <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
          
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
          <ul>
          <li><a href="employee_dashboard.php" target="_self">Dashboard</a></li>
          <li><a href="exam.php" target="_self">Exam</a></li>
          <li><a href="createCourseOutlinePage1.php" target="_self">Create Course Outline</a></li>
          <li><a href="viewCourseOutline.php" target="_self">View Course Outline</a></li>
          <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
      </div>

  </body>

</html>