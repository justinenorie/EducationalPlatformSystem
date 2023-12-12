<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCIENCE</title>
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
            <div class="title-course"><h1>SCIENCE</h1>
            </div>  
            <div class="course-container">
                <div class="topics">
                    <button class="topic" onclick="showContent('content1', 'button1')" id="button1">Earth Science</button>
                    <button class="topic" onclick="showContent('content2', 'button2')" id="button2">Physics</button>
                    <button class="topic" onclick="showContent('content3', 'button3')" id="button3">Chemistry</button>
                    <button class="topic" onclick="showContent('content4', 'button4')" id="button4">Biology</button>
                    <button class="topic" onclick="showContent('content5', 'button5')" id="button5">CERTIFICATE</button>
                </div>

                <div class="contents-container">
                    <div class="content" id="content1">
                    <h2>Earth Science</h2>
                        <div class="included-content">
                        <embed src="../science-contents/1Earth-Science-Earth-StructureMovement-of-Earths-Crust-Earthquakes.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button id="btn_quiz1" onclick="quiz1()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content2">
                    <h2>Physics</h2>
                        <div class="included-content">
                        <embed src="../science-contents/2Physics.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button onclick="quiz2()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content3">
                    <h2>Chemistry</h2>
                        <div class="included-content">
                        <embed src="../science-contents/3Chemistry.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button onclick="quiz3()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content4">
                    <h2>Biology</h2>
                    <div class="included-content">
                        <embed src="../science-contents/4Biology.pdf" type="application/pdf" width="100%" height=1000px/>
                        </div>
                        <div class="course-quiz"><button onclick="quiz3()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content5">
                        <h2>CERTIFCATE</h2>
                        <p>This is the content related to Topic 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- JavaScript script -->
<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Initially disable all buttons except the first one
    document.getElementById("button2").disabled = true;
    document.getElementById("button3").disabled = true;
    document.getElementById("button4").disabled = true;
    document.getElementById("button5").disabled = true;

    // Assuming you have a session variable to check quiz1 completion
    var quiz1Completed = <?php echo isset($_SESSION['sci_quiz1_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 1 Completed:', quiz1Completed);

    if (quiz1Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button2").disabled = false;
    }

    // Assuming you have a session variable to check quiz2 completion
    var quiz2Completed = <?php echo isset($_SESSION['sci_quiz2_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 2 Completed:', quiz2Completed);

    if (quiz2Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button3").disabled = false;
    }

    // Assuming you have a session variable to check quiz3 completion
    var quiz3Completed = <?php echo isset($_SESSION['sci_quiz3_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 3 Completed:', quiz3Completed);

    if (quiz3Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button4").disabled = false;
    }
    // Assuming you have a session variable to check quiz3 completion
    var quiz4Completed = <?php echo isset($_SESSION['sci_quiz4_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 4 Completed:', quiz4Completed);

    if (quiz4Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button5").disabled = false;
    }
});

    function quiz1() {
        // Redirect to Quiz 1 if the condition is met
        window.location.href = 'quiz1.php';
    }
    // Add similar functions for quiz2() and quiz3() if needed
    function quiz2() {
        window.location.href = 'quiz2.php'; // Replace with the actual URL
    }

    function quiz3() {
        window.location.href = 'quiz3.php'; // Replace with the actual URL
    }
    function quiz4() {
        window.location.href = 'quiz4.php'; // Replace with the actual URL
    }
</script>


</body>
</html>