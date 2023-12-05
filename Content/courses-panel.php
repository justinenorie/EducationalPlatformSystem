<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCATIVO Courses</title>
    <link rel="stylesheet" href="../Content/css/courses-panel.css">
    <script src="../js/courses.js"></script>
</head>
<body>
    <div class="background">
        <div class="banner">
            <div class="banner-title">
                    <!-- <img src="" alt=""> -->
                    <h1>EDUCATIVO</h1>
            </div>
            <nav>
                <div class="banner-selection">
                    <a id="home" href="">Home</a>
                    <a href="#">Courses</a>
                    <a id="aboutus" href="">About Us</a>
                </div>
            </nav>
            <div class="users">
                <a href="../User-interface/Login_form/index.php?logout=true"><button>Logout</button></a>
            </div>
        </div>

        <div class="courses">
            <h1 class ="featured-courses">Featured Courses</h1>
            <div class="course math">
                <h1>MATHEMATICS</h1>
                <p>Description for mathematics Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus, odio ut possimus voluptatum fugiat earum alias facilis, quasi est blanditiis similique harum libero. Praesentium voluptatibus maxime obcaecati similique sapiente magnam beatae tempore quia fugit animi minus hic saepe, optio itaque, eum nam harum suscipit aut quisquam. Veniam, nisi repudiandae?</p>
                <div id="math" class="learn-button"><button onclick="mathematics()">LEARN NOW</button></div> 
            </div>

            <div class="course english">
                <h1>ENGLISH</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus, odio ut possimus voluptatum fugiat earum alias facilis, quasi est blanditiis similique harum libero. Praesentium voluptatibus maxime obcaecati similique sapiente magnam beatae tempore quia fugit animi minus hic saepe, optio itaque, eum nam harum suscipit aut quisquam. Veniam, nisi repudiandae?</p>
                <div id="eng" class="learn-button"> <button onclick="english()">LEARN NOW</button></div>
            
            </div>

            <div class="course science">
                <h1>SCIENCE</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente minus, odio ut possimus voluptatum fugiat earum alias facilis, quasi est blanditiis similique harum libero. Praesentium voluptatibus maxime obcaecati similique sapiente magnam beatae tempore quia fugit animi minus hic saepe, optio itaque, eum nam harum suscipit aut quisquam. Veniam, nisi repudiandae?</p>
                <div id="sci" class="learn-button"> <button onclick="science()">LEARN NOW</button></div>
            </div>    
        </div>
    </div>
    
</body>
</html>