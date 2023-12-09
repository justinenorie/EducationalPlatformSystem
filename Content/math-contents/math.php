<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATHEMATICS</title>
    <link rel="stylesheet" href="../../Content/css/style-courses.css">
    <script src="../../js/courses.js"></script>
</head>
<body>
    <div class="background">
        <div class="banner">
            <div class="banner-title">
                    <h1>EDUCATIVO</h1>
            </div>
            <nav>
                <div class="banner-selection">
                    <a href="../../User-interface/Login_form/index.php">Home</a>
                    <a href="../../Content/courses-panel.php">Courses</a>
                    <a href="../../User-interface/Login_form/index.php #aboutus">About Us</a>
                </div>
            </nav>
            <div class="users">
                <a href="../../User-interface/Login_form/index.php?logout=true"><button>Logout</button></a>
            </div>
        </div>
        
        <div class="contain">
            <div class="theme-mode">
                <button class="hover-btn" id="modeToggleBtn" onclick="toggleMode()">Background Theme</button>
            </div>
            <div class="title-course"><h1>MATHEMATICS</h1>
            </div>  
            <div class="course-container">
                <div class="topics">
                    <button class="topic" onclick="showContent('content1', 'button1')" id="button1">General Mathematics 1</button>
                    <button class="topic" onclick="showContent('content2', 'button2')" id="button2">General Mathematics 2</button>
                    <button class="topic" onclick="showContent('content3', 'button3')" id="button3">General Mathematics 3</button>
                    <button class="topic" onclick="showContent('content4', 'button4')" id="button4">CERTIFICATE</button>
                </div>

                <div class="contents-container">
                    <div class="content" id="content1">
                    <h2>General Mathematics 1</h2>
                        <div class="included-content">
                        <embed src="../math-contents/1GeneralMathematics1.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button id="btn_quiz1" onclick="quiz1()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content2">
                    <h2>General Mathematics 2</h2>
                        <div class="included-content">
                        <embed src="../math-contents/2GeneralMathematics2.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button onclick="quiz2()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content3">
                        <h2>General Mathematics 3</h2>
                        <div class="included-content">
                        <embed src="../math-contents/3GeneralMathematics3.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button onclick="quiz3()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content4">
                        <h2>CERTIFCATE</h2>
                        <p>This is the content related to Topic 3.</p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var delayInMilliseconds = 1000;
            function redirect_to_quiz_math() {
            window.location.href = "../../Content/math-contents/math-quiz.php";
            }
            document.getElementById("btn_quiz1").addEventListener("click", function(event) {
            event.preventDefault();
            setTimeout(redirect_to_quiz_math, delayInMilliseconds);
            });
        });
        document.querySelector('.hover-btn').title = 'Toggle Dark Mode';
    </script>
</body>
</html>