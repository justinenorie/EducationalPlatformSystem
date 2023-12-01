<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCATIVO Courses</title>
    <link rel="stylesheet" href="/IT-ELECT-FINALPROJ-main/Content/courses-panel.css">
    <script src="/IT-ELECT-FINALPROJ-main/Content/courses.js"></script>
</head>
<body>
    <div class="banner">
        <div class="banner-title">
                <!-- <img src="" alt=""> -->
                <h1>EDUCATIVO</h1>
        </div>
        <nav>
            <div class="banner-selection">
                <a id="home" href="">Home</a>
                <a href="#">Courses</a>
                <a href="/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php #aboutus">About Us</a>
            </div>
        </nav>
        <div class="users">
            <a href="/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php?logout=true"><button>Logout</button></a>
        </div>
    </div>

    <div class="courses">
        <h1 class ="featured-courses">Featured Courses</h1>
        <div class="course math">
            <h1>MATHEMATICS</h1>
            <p>Description for mathematics Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus, odio ut possimus voluptatum fugiat earum alias facilis, quasi est blanditiis similique harum libero. Praesentium voluptatibus maxime obcaecati similique sapiente magnam beatae tempore quia fugit animi minus hic saepe, optio itaque, eum nam harum suscipit aut quisquam. Veniam, nisi repudiandae?</p>
            <div class="learn-button"><button onclick="mathematics()">LEARN NOW</button></div> 
        </div>

        <div class="course english">
            <h1>ENGLISH</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus, odio ut possimus voluptatum fugiat earum alias facilis, quasi est blanditiis similique harum libero. Praesentium voluptatibus maxime obcaecati similique sapiente magnam beatae tempore quia fugit animi minus hic saepe, optio itaque, eum nam harum suscipit aut quisquam. Veniam, nisi repudiandae?</p>
            <div class="learn-button"> <button onclick="english()">LEARN NOW</button></div>
           
        </div>

        <div class="course science">
            <h1>SCIENCE</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus, odio ut possimus voluptatum fugiat earum alias facilis, quasi est blanditiis similique harum libero. Praesentium voluptatibus maxime obcaecati similique sapiente magnam beatae tempore quia fugit animi minus hic saepe, optio itaque, eum nam harum suscipit aut quisquam. Veniam, nisi repudiandae?</p>
            <div class="learn-button"> <button onclick="science()">LEARN NOW</button></div>
        </div>    
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var delayInMilliseconds = 1000;
        function redirect_to_mainpage() {
        window.location.href = "/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php";
        }
        function redirect_Courses_banner() {
        window.location.href = "/IT-ELECT-FINALPROJ-main/Content/courses-panel.php";
        }

        document.getElementById("home").addEventListener("click", function(event) {
        event.preventDefault();
        setTimeout(redirect_to_mainpage, delayInMilliseconds);
        });

        document.getElementById("courses").addEventListener("click", function(event) {
        event.preventDefault();
        setTimeout(redirect_Courses_banner, delayInMilliseconds);
        });
    });
</script>
</body>
</html>