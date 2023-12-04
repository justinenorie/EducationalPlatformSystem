<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH QUIZ</title>
    <script src="/IT-ELECT-FINALPROJ-main/js/courses.js"></script>
    <link rel="stylesheet" href="/IT-ELECT-FINALPROJ-main/Content/css/style-courses.css">
</head>
<body>
    <!-- QUIZZES -->
    <div class="overlay" onclick="hideQuizPopup()"></div>
        <div class="quiz-popup">
        <h1>MATHEMATICS QUIZ</h1>
            <form action="quiz_handler.php" method="post">
                <div class="options-container">
                    <div>
                        <label for="question1">Question 1: Choose one option</label>
                            <div>
                                <input type="radio" id="optionA" name="question1" value="a">
                                <label for="optionA">Option A</label>
                            </div>
                            <div>
                                <input type="radio" id="optionB" name="question1" value="b">
                                <label for="optionB">Option B</label>
                            </div>
                            <div>
                                <input type="radio" id="optionC" name="question1" value="c">
                                <label for="optionC">Option C</label>
                            </div>
                    </div>

                    <div>
                        <label for="question2">Question 2: Choose one option</label>
                            <div>
                                <input type="radio" id="optionA" name="question1" value="a">
                                <label for="optionA">Option A</label>
                            </div>
                            <div>
                                <input type="radio" id="optionB" name="question1" value="b">
                                <label for="optionB">Option B</label>
                            </div>
                            <div>
                                <input type="radio" id="optionC" name="question1" value="c">
                                <label for="optionC">Option C</label>
                            </div>
                    </div>

                        
                    <div>
                        <label for="question3">Question 3: Choose one option</label>
                            <div>
                                <input type="radio" id="optionA" name="question1" value="a">
                                <label for="optionA">Option A</label>
                            </div>
                            <div>
                                <input type="radio" id="optionB" name="question1" value="b">
                                <label for="optionB">Option B</label>
                            </div>
                            <div>
                                <input type="radio" id="optionC" name="question1" value="c">
                                <label for="optionC">Option C</label>
                            </div>
                    </div>

                    <div>
                        <label for="question4">Question 4: Choose one option</label>
                            <div>
                                <input type="radio" id="optionA" name="question1" value="a">
                                <label for="optionA">Option A</label>
                            </div>
                            <div>
                                <input type="radio" id="optionB" name="question1" value="b">
                                <label for="optionB">Option B</label>
                            </div>
                            <div>
                                <input type="radio" id="optionC" name="question1" value="c">
                                <label for="optionC">Option C</label>
                            </div>
                    </div>

                    <div>
                        <label for="question5">Question 5: Choose one option</label>
                            <div>
                                <input type="radio" id="optionA" name="question1" value="a">
                                <label for="optionA">Option A</label>
                            </div>
                            <div>
                                <input type="radio" id="optionB" name="question1" value="b">
                                <label for="optionB">Option B</label>
                            </div>
                            <div>
                                <input type="radio" id="optionC" name="question1" value="c">
                                <label for="optionC">Option C</label>
                            </div>
                    </div>

                        <!-- Input for the score -->
                    <input type="hidden" id="score" name="score" value="0">

                        <!-- Submit button -->
                    <div class="submit-btn">
                        <button type="button" onclick="checkScores(); hideQuizPopup()">Submit</button>
                    
                    </div>
                </div>
            </form>   
        </div>
</body>
</html>