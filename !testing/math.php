<?php
session_start();
?>
<!-- <!DOCTYPE html>
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
</html> -->



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
                    <button class="topic" onclick="showContent('content1', 'button1')" id="button1">21st Century</button>
                    <button class="topic" onclick="showContent('content2', 'button2')" id="button2">Topic 2</button>
                    <button class="topic" onclick="showContent('content3', 'button3')" id="button3">Topic 3</button>
                    <button class="topic" onclick="showContent('content4', 'button4')" id="button4">CERTIFICATE</button>
                </div>

                <div class="contents-container">
                    <div class="content" id="content1">
                        <!-- <embed src="../Content/content-files/21st-century-1.pdf" type="application/pdf" width="100%" height="600px" /> -->
                        <h2>Exploring Philippine Literacy Forms, Genres, Elements, and Traditions</h2>
                        <p>Philippine literature is as rich and diverse as the 7500 plus islands that make up our archipelago. This is not surprising considering that we have 183 living languages (ethnologue.com) across 17 regions comprised of 82 provinces. One can only imagine the many forms of artistic communication (oral or written) that have been passed on to and through generations, communities, and groups. Then and now, literature in the Philippines have come in various genres (forms) and have been appreciated and analyzed for their forms, elements, structures, and traditions.
                        </p>
                        <p>
                        The origin of Philippine literature can only be traced by exploring its evolution from pre-colonial up to the present. Thus, studying the past becomes imperative in understanding the literature of the present. Different genres that appeared from each period seem to reflect the place, language, culture, social and ethnic dimensions of literature produced. The nature and essence of literature has evolved over time. Traditionally, literature was strictly viewed as any form of written works especially during the 18th century. Today, its definition and scope can be considered more restrictive for there are certain standards set by some critiques before a work can be considered as a body of literature. Among the common words used by scholars and other sources that are associated to literature are excellence, expression, experience, artistry, and imagination. Its connection to human life and experiences, wherein audience can easily relate with, is the major characteristic of literature. Emerging habitually into quality literary works will help us gain better understanding of people, society, and culture.
                        </p>
                        <p>The term literature is derived from the Latin word "littera" which means "a letter of the alphabet". According to the website Britannica, literature is traditionally defined as body of written works associated to imaginative and creative works of poetry and prose and can be classified according to variety of systems such as language, national origin, historical period, genre and subject matter.
                        </p>
                        <p>
                        Literature can either be in oral or written form. The oral literature handed down from one generation to another, then later on transformed into written form. The products of written literature are called literary text. A text can be considered literary if it has the elements of psychological characterization and chronology. Also, literature uses literary devices such as metaphor and symbolism. Reading for entertainment and learning is the most common reason why people read literature.
                        </p>
                        <div class="course-quiz"><button id="btn_quiz1" onclick="quiz1()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content2">
                        <h2>Content for Topic 2</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur placeat dicta at officiis nulla, enim repudiandae debitis ducimus corporis, quos obcaecati? Debitis necessitatibus laudantium repellat numquam tempore. Ratione dolorum corrupti sapiente reiciendis harum! Dolor possimus accusantium maiores odio quo accusamus alias repudiandae itaque voluptate quibusdam assumenda, dolorem temporibus, veniam architecto vero fuga rem obcaecati impedit deleniti, fugit quam est mollitia sapiente! Alias, nisi numquam aspernatur suscipit cupiditate minus labore recusandae quae eveniet placeat! Deleniti nulla illo harum illum facere error? Ducimus sapiente fugit dolor similique ipsa iure culpa totam ratione. Itaque similique quisquam adipisci voluptatum ex placeat aliquid facere cupiditate!.</p>
                        <div class="course-quiz"><button onclick="quiz2()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content3">
                        <h2>Content for Topic 3</h2>
                        <p>This is the content related to Topic 3.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quos doloremque ducimus cum placeat neque odit soluta necessitatibus! Labore rerum laborum atque sapiente nostrum, sunt eum nemo perspiciatis aspernatur dolor cupiditate esse. Velit nulla eaque earum quam. Accusamus optio doloremque totam labore consequuntur officia sit ducimus beatae, maiores, eos nesciunt tempore necessitatibus ipsam omnis at iste numquam qui aperiam dolore? Delectus eligendi eveniet doloremque at cum repudiandae nam quo minima sunt rerum rem, maxime ab totam deserunt esse voluptas, ipsa sequi aperiam, voluptatem similique aut. Molestiae asperiores repellendus impedit, quis itaque incidunt ex ratione modi magnam quas laudantium necessitatibus possimus voluptatibus architecto, dolore eum voluptates neque at? Qui suscipit corporis quod voluptatum non assumenda ullam distinctio inventore deleniti quaerat excepturi tempora dolore reprehenderit, corrupti maxime. Harum totam ea ad quisquam architecto iste natus! Laborum ex quisquam quibusdam dolorum fuga, inventore ipsum reprehenderit iusto ullam assumenda fugiat amet quos eligendi aut. Aut expedita soluta optio eveniet laborum nesciunt debitis incidunt aliquam voluptatibus omnis vero iste accusantium sapiente nam numquam fuga ratione a fugiat error atque, hic at corrupti. Ad veritatis libero, laudantium, nihil doloribus autem eaque quas deleniti vitae totam minus sed numquam dolore asperiores ducimus necessitatibus itaque id eveniet placeat?</p>
                        <div class="course-quiz"><button onclick="quiz3()">Take the Quiz</button></div>
                    </div>
                    <div class="content" id="content4">
                        <h2>CERTIFCATE</h2>
                        <p>This is the content related to Topic 3.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A dolore quibusdam reprehenderit ducimus officia delectus et dolor praesentium assumenda blanditiis culpa, accusantium harum ea omnis laudantium nam. Cum, accusamus quaerat accusantium officiis ipsam, consectetur voluptatum libero labore itaque et illo sequi? Placeat enim pariatur excepturi sunt similique expedita hic commodi labore, culpa, laboriosam illum molestiae aspernatur reiciendis fugit nulla minima. Omnis in rem aperiam dignissimos magni maxime, atque blanditiis esse autem temporibus sequi alias possimus! Qui reprehenderit consequatur tenetur quo labore, corporis eius nesciunt blanditiis! Enim iure eos doloremque cumque dolore, nihil ipsum provident obcaecati. Quibusdam eveniet sequi tenetur neque!</p>
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

    // Assuming you have a session variable to check quiz1 completion
    var quiz1Completed = <?php echo isset($_SESSION['quiz1_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 1 Completed:', quiz1Completed);

    if (quiz1Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button2").disabled = false;
    }

    // Assuming you have a session variable to check quiz2 completion
    var quiz2Completed = <?php echo isset($_SESSION['quiz2_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 2 Completed:', quiz2Completed);

    if (quiz2Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button3").disabled = false;
    }

    // Assuming you have a session variable to check quiz3 completion
    var quiz3Completed = <?php echo isset($_SESSION['quiz3_completed']) ? 'true' : 'false'; ?>;
    console.log('Quiz 3 Completed:', quiz3Completed);

    if (quiz3Completed) {
        // Enable the button corresponding to the unlocked topic
        document.getElementById("button4").disabled = false;
    }
});

    function quiz1() {
        // Redirect to Quiz 1 if the condition is met
        window.location.href = 'questions.php';
    }

    // Add similar functions for quiz2() and quiz3() if needed
    function quiz2() {
        window.location.href = 'quiz2.php'; // Replace with the actual URL
    }

    function quiz3() {
        window.location.href = 'quiz3.php'; // Replace with the actual URL
    }
</script>


</body>
</html>