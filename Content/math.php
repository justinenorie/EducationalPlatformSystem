<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATHEMATICS</title>
    <link rel="stylesheet" href="/IT-ELECT-FINALPROJ-main/Content/css/math.css">
    <script src="/IT-ELECT-FINALPROJ-main/js/courses.js"></script>
</head>
<body>
    <div class="banner">
        <div class="banner-title">
                <h1>EDUCATIVO</h1>
        </div>
        <nav>
            <div class="banner-selection">
                <a href="/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php">Home</a>
                <a href="/IT-ELECT-FINALPROJ-main/Content/courses-panel.php">Courses</a>
                <a href="/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php #aboutus">About Us</a>
            </div>
        </nav>
        <div class="users">
            <a href="/IT-ELECT-FINALPROJ-main/User-interface/Login_form/index.php?logout=true"><button>Logout</button></a>
        </div>
    </div>

    <div class="contain">
        <div class="title-course"><h1>MATHEMATICS</h1></div>  
    
        <div class="course-container">
            <div class="topics">
                <button class="topic" onclick="showContent('content1', 'button1')" id="button1">Topic 1</button>
                <button class="topic" onclick="showContent('content2', 'button2')" id="button2">Topic 2</button>
                <button class="topic" onclick="showContent('content3', 'button3')" id="button3">Topic 3</button>
                <button class="topic" onclick="showContent('content4', 'button4')" id="button4">CERTIFICATE</button>
            </div>
        
            <div class="contents-container">
                <div class="content" id="content1">
                    <h2>Content for Topic 1</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A dolore quibusdam reprehenderit ducimus officia delectus et dolor praesentium assumenda blanditiis culpa, accusantium harum ea omnis laudantium nam. Cum, accusamus quaerat accusantium officiis ipsam, consectetur voluptatum libero labore itaque et illo sequi? Placeat enim pariatur excepturi sunt similique expedita hic commodi labore, culpa, laboriosam illum molestiae aspernatur reiciendis fugit nulla minima. Omnis in rem aperiam dignissimos magni maxime, atque blanditiis esse autem temporibus sequi alias possimus! Qui reprehenderit consequatur tenetur quo labore, corporis eius nesciunt blanditiis! Enim iure eos doloremque cumque dolore, nihil ipsum provident obcaecati. Quibusdam eveniet sequi tenetur neque!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quos doloremque ducimus cum placeat neque odit soluta necessitatibus! Labore rerum laborum atque sapiente nostrum, sunt eum nemo perspiciatis aspernatur dolor cupiditate esse. Velit nulla eaque earum quam. Accusamus optio doloremque totam labore consequuntur officia sit ducimus beatae, maiores, eos nesciunt tempore necessitatibus ipsam omnis at iste numquam qui aperiam dolore? Delectus eligendi eveniet doloremque at cum repudiandae nam quo minima sunt rerum rem, maxime ab totam deserunt esse voluptas, ipsa sequi aperiam, voluptatem similique aut. Molestiae asperiores repellendus impedit, quis itaque incidunt ex ratione modi magnam quas laudantium necessitatibus possimus voluptatibus architecto, dolore eum voluptates neque at? Qui suscipit corporis quod voluptatum non assumenda ullam distinctio inventore deleniti quaerat excepturi tempora dolore reprehenderit, corrupti maxime. Harum totam ea ad quisquam architecto iste natus! Laborum ex quisquam quibusdam dolorum fuga, inventore ipsum reprehenderit iusto ullam assumenda fugiat amet quos eligendi aut. Aut expedita soluta optio eveniet laborum nesciunt debitis incidunt aliquam voluptatibus omnis vero iste accusantium sapiente nam numquam fuga ratione a fugiat error atque, hic at corrupti. Ad veritatis libero, laudantium, nihil doloribus autem eaque quas deleniti vitae totam minus sed numquam dolore asperiores ducimus necessitatibus itaque id eveniet placeat?</p>
                    <div class="course-quiz"><button onclick="quiz1()">Take the Quiz</button></div>
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
                <!-- Quiz form -->
                <div class="quiz-form" id="quizForm">
                    <form action="quiz_handler.php" method="post">
                        <label for="question1">Question 1: What is 2 + 2?</label>
                        <input type="text" id="question1" name="question1" required>
                        
                        <!-- Add more questions as needed -->

                        <!-- Input for the score -->
                        <input type="hidden" id="score" name="score" value="0">

                        <!-- Submit button -->
                        <button type="button" onclick="checkScores()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    

    <script>
        // Function to show the quiz form
        function showQuiz(contentId, buttonId) {
            // Your existing logic to show content goes here

            // Hide the quiz form initially
            var quizForm = document.getElementById('quizForm');
            quizForm.style.display = 'none';

            // Show the quiz form when the button is clicked
            quizForm.style.display = 'block';

            // Your existing logic to highlight the active button goes here
        }

        // Your existing functions for quiz1(), quiz2(), etc.

        // Function to check scores (you can implement this based on your needs)
        function checkScores() {
            // Your logic to calculate and handle quiz scores goes here
            // Update the score input value before submitting the form
            document.getElementById('score').value = calculatedScore;

            // Submit the form
            document.querySelector('form').submit();
        }
    </script>

</body>
</html>