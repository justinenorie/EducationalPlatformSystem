<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="quiz-container">
    <h1>Quiz Time</h1>
    <form id="quiz-form" action="quiz_handler.php" method="post">
        <div class="options-container" id="question-container">
            <!-- Questions and options are already populated here -->
            <div class="question" data-number="1" style="display: block;">
                <h2>Question 1: Choose one option</h2>
                <div>
                    <input type="radio" id="q1OptionA" name="question1" value="a">
                    <label for="q1OptionA">Option A</label>
                </div>
                <div>
                    <input type="radio" id="q1OptionB" name="question1" value="b">
                    <label for="q1OptionB">Option B</label>
                </div>
                <div>
                    <input type="radio" id="q1OptionC" name="question1" value="c">
                    <label for="q1OptionC">Option C</label>
                </div>
                <div>
                    <input type="radio" id="q1OptionD" name="question1" value="d">
                    <label for="q1OptionD">Option D</label>
                </div>
            </div>

            <div class="question" data-number="2" style="display: none;">
                <h2>Question 2: Choose one option</h2>
                <div>
                    <input type="radio" id="q2OptionA" name="question2" value="a">
                    <label for="q2OptionA">Option A</label>
                </div>
                <div>
                    <input type="radio" id="q2OptionB" name="question2" value="b">
                    <label for="q2OptionB">Option B</label>
                </div>
                <div>
                    <input type="radio" id="q2OptionC" name="question2" value="c">
                    <label for="q2OptionC">Option C</label>
                </div>
                <div>
                    <input type="radio" id="q2OptionD" name="question2" value="d">
                    <label for="q2OptionD">Option D</label>
                </div>
            </div>

            <div class="question" data-number="3" style="display: none;">
                <h2>Question 3: Choose one option</h2>
                <div>
                    <input type="radio" id="q3OptionA" name="question3" value="a">
                    <label for="q3OptionA">Option A</label>
                </div>
                <div>
                    <input type="radio" id="q3OptionB" name="question3" value="b">
                    <label for="q3OptionB">Option B</label>
                </div>
                <div>
                    <input type="radio" id="q3OptionC" name="question3" value="c">
                    <label for="q3OptionC">Option C</label>
                </div>
                <div>
                    <input type="radio" id="q3OptionD" name="question3" value="d">
                    <label for="q3OptionD">Option D</label>
                </div>
            </div>

            <div class="question" data-number="4" style="display: none;">
                <h2>Question 4: Choose one option</h2>
                <div>
                    <input type="radio" id="q4OptionA" name="question4" value="a">
                    <label for="q4OptionA">Option A</label>
                </div>
                <div>
                    <input type="radio" id="q4OptionB" name="question4" value="b">
                    <label for="q4OptionB">Option B</label>
                </div>
                <div>
                    <input type="radio" id="q4OptionC" name="question4" value="c">
                    <label for="q4OptionC">Option C</label>
                </div>
                <div>
                    <input type="radio" id="q4OptionD" name="question4" value="d">
                    <label for="q4OptionD">Option D</label>
                </div>
            </div>

            <div class="question" data-number="5" style="display: none;">
                <h2>Question 5: Choose one option</h2>
                <div>
                    <input type="radio" id="q5OptionA" name="question5" value="a">
                    <label for="q5OptionA">Option A</label>
                </div>
                <div>
                    <input type="radio" id="q5OptionB" name="question5" value="b">
                    <label for="q5OptionB">Option B</label>
                </div>
                <div>
                    <input type="radio" id="q5OptionC" name="question5" value="c">
                    <label for="q5OptionC">Option C</label>
                </div>
                <div>
                    <input type="radio" id="q5OptionD" name="question5" value="d">
                    <label for="q5OptionD">Option D</label>
                </div>
            </div>


            <!-- Repeat similar structure for additional questions -->
        </div>

        <!-- Next button -->
        <div class="next-btn">
            <button type="button" onclick="showNextQuestion()">Next</button>
        </div>

        <!-- Submit button -->
        <div class="submit-btn" style="display: none;">
            <button type="button" onclick="checkAnswers()">Submit</button>
        </div>
    </form>
</div>

<script>
    let currentQuestionNumber = 1;
    const totalQuestions = 5; // Adjust this based on the total number of questions

    function showNextQuestion() {
        // Hide the current question
        document.querySelector(`.question[data-number="${currentQuestionNumber}"]`).style.display = 'none';

        // Move to the next question
        currentQuestionNumber++;

        if (currentQuestionNumber <= totalQuestions) {
            // Show the next question
            document.querySelector(`.question[data-number="${currentQuestionNumber}"]`).style.display = 'block';
        } else {
            // Show submit button when all questions are answered
            document.querySelector('.next-btn').style.display = 'none';
            document.querySelector('.submit-btn').style.display = 'block';
        }
    }

    function checkAnswers() {
        // Your logic to check answers and calculate score goes here
        // Update the value of the hidden input field with the calculated score
        // Then submit the form
        document.getElementById('quiz-form').submit();
    }
</script>

</body>
</html>
