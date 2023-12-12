<?php
session_start();
if (!isset($_SESSION['eng_quiz3_completed'])) { //changes
    // Set it to true only if the user passes the quiz
    $_SESSION['eng_quiz3_completed'] = true; //changes
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORAL-COM QUIZ</title>
    <link rel="stylesheet" href="../../Content/css/style-courses.css">
    <script src="../../js/courses.js"></script>
</head>
<body>
    <div class="quiz-container">
        <div class="questionnaire">
        
            <form id="quiz-form" method="post">
                <div class="options-container" id="question-container">
                    <h1>ORAL COMMUNICATION QUIZ</h1>
                    <p>Let's Test Your Knowledge to Unlock the Next Topic.</p>
                    <div class="question" data-number="1" style="display: block;">
                        <h2>It is the process of verbally or nonverbally transmitting ideas or messages within or across various contexts, cultures, channels and media.</h2>
                        <div>
                            <input type="radio" id="q1OptionA" name="question1" value="a">
                            <label for="q1OptionA">Intrapersonal Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionB" name="question1" value="b">
                            <label for="q1OptionB">Oral Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionC" name="question1" value="c">
                            <label for="q1OptionC">Interpersonal Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionD" name="question1" value="d">
                            <label for="q1OptionD">Public Communication</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="2" style="display: none;">
                        <h2>Refers to communication that centers on one person where the speaker acts both as the sender and the receiver of the message.</h2>
                        <div>
                            <input type="radio" id="q2OptionA" name="question2" value="a">
                            <label for="q2OptionA">Intrapersonal Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionB" name="question2" value="b">
                            <label for="q2OptionB">Oral Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionC" name="question2" value="c">
                            <label for="q2OptionC">Interpersonal Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionD" name="question2" value="d">
                            <label for="q2OptionD">Public Communication</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="3" style="display: none;">
                        <h2>Refers to communication that requires you to deliver or send the message before or in front of a group.</h2>
                        <div>
                            <input type="radio" id="q3OptionA" name="question3" value="a">
                            <label for="q3OptionA">Intrapersonal Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionB" name="question3" value="b">
                            <label for="q3OptionB">Oral Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionC" name="question3" value="c">
                            <label for="q3OptionC">Interpersonal Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionD" name="question3" value="d">
                            <label for="q3OptionD">Public Communication</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="4" style="display: none;">
                        <h2>Refers to communication that takes place through television, radio, newspapers, magazines, books, billboards, internet, and other types of media.</h2>
                        <div>
                            <input type="radio" id="q4OptionA" name="question4" value="a">
                            <label for="q4OptionA">Oral Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionB" name="question4" value="b">
                            <label for="q4OptionB">Organizational Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionC" name="question4" value="c">
                            <label for="q4OptionC">Mass Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionD" name="question4" value="d">
                            <label for="q4OptionD">Dyad Communication</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="5" style="display: none;">
                        <h2>Refers to communication that occurs between two people.</h2>
                        <div>
                            <input type="radio" id="q5OptionA" name="question5" value="a">
                            <label for="q5OptionA">Oral Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionB" name="question5" value="b">
                            <label for="q5OptionB">Organizational Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionC" name="question5" value="c">
                            <label for="q5OptionC">Mass Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionD" name="question5" value="d">
                            <label for="q5OptionD">Dyad Communication</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="6" style="display: none;">
                        <h2>Refers to communication that occurs within organizations, such as corporations, non-profits, and governmental bodies.</h2>
                        <div>
                            <input type="radio" id="q6OptionA" name="question6" value="a">
                            <label for="q6OptionA">Oral Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionB" name="question6" value="b">
                            <label for="q6OptionB">Organizational Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionC" name="question6" value="c">
                            <label for="q6OptionC">Mass Communication</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionD" name="question6" value="d">
                            <label for="q6OptionD">Dyad Communication</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="7" style="display: none;">
                        <h2>This is usually used at the beginning of the interaction to set the purpose of the conversation. The speaker tries to open a topic with the people he is talking to. One must present a particular topic clearly and truthfully.</h2>
                        <div>
                            <input type="radio" id="q7OptionA" name="question7" value="a">
                            <label for="q7OptionA">Nomination</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionB" name="question7" value="b">
                            <label for="q7OptionB">Restriction</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionC" name="question7" value="c">
                            <label for="q7OptionC">Turn-taking</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionD" name="question7" value="d">
                            <label for="q7OptionD">Topic Control</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="8" style="display: none;">
                        <h2>This strategy is used to establish and sustain a productive conversation.</h2>
                        <div>
                            <input type="radio" id="q8OptionA" name="question8" value="a">
                            <label for="q8OptionA">Nomination</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionB" name="question8" value="b">
                            <label for="q8OptionB">Restriction</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionC" name="question8" value="c">
                            <label for="q8OptionC">Turn-taking</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionD" name="question8" value="d">
                            <label for="q8OptionD">Topic Control</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="9" style="display: none;">
                        <h2>This is a communicative strategy used in keeping the conversation going on by asking questions that require a response from the listener.</h2>
                        <div>
                            <input type="radio" id="q9OptionA" name="question9" value="a">
                            <label for="q9OptionA">Nomination</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionB" name="question9" value="b">
                            <label for="q9OptionB">Restriction</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionC" name="question9" value="c">
                            <label for="q9OptionC">Turn-taking</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionD" name="question9" value="d">
                            <label for="q9OptionD">Topic Control</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>


                    <div class="question" data-number="10" style="display: none;">
                        <h2>This is used in constraining the reaction or response within a defined set of categories.</h2>
                        <div>
                            <input type="radio" id="q10OptionA" name="question10" value="a">
                            <label for="q10OptionA">Nomination</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionB" name="question10" value="b">
                            <label for="q10OptionB">Restriction</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionC" name="question10" value="c">
                            <label for="q10OptionC">Turn-taking</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionD" name="question10" value="d">
                            <label for="q10OptionD">Topic Control</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="11" style="display: none;">
                        <h2>The First Principle of Speech Writing is</h2>
                        <div>
                            <input type="radio" id="q11OptionA" name="question11" value="a">
                            <label for="q11OptionA">Analyzing the Audience</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionB" name="question11" value="b">
                            <label for="q11OptionB">Sourcing the Information</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionC" name="question11" value="c">
                            <label for="q11OptionC">Outlining and Organizing the Speech Content</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionD" name="question11" value="d">
                            <label for="q11OptionD">Choosing the Topic</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="12" style="display: none;">
                        <h2>The Second Principle of Speech Writing is</h2>
                        <div>
                            <input type="radio" id="q12OptionA" name="question12" value="a">
                            <label for="q12OptionA">Analyzing the Audience</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionB" name="question12" value="b">
                            <label for="q12OptionB">Sourcing the Information</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionC" name="question12" value="c">
                            <label for="q12OptionC">Outlining and Organizing the Speech Content</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionD" name="question12" value="d">
                            <label for="q12OptionD">Choosing the Topic</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="13" style="display: none;">
                        <h2>The Third Principle of Speech Writing is</h2>
                        <div>
                            <input type="radio" id="q13OptionA" name="question13" value="a">
                            <label for="q13OptionA">Analyzing the Audience</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionB" name="question13" value="b">
                            <label for="q13OptionB">Sourcing the Information</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionC" name="question13" value="c">
                            <label for="q13OptionC">Outlining and Organizing the Speech Content</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionD" name="question13" value="d">
                            <label for="q13OptionD">Choosing the Topic</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="14" style="display: none;">
                        <h2>The Fourth Principle of Speech Writing is</h2>
                        <div>
                            <input type="radio" id="q14OptionA" name="question14" value="a">
                            <label for="q14OptionA">Analyzing the Audience</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionB" name="question14" value="b">
                            <label for="q14OptionB">Sourcing the Information</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionC" name="question14" value="c">
                            <label for="q14OptionC">Outlining and Organizing the Speech Content</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionD" name="question14" value="d">
                            <label for="q14OptionD">Choosing the Topic</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="15" style="display: none;">
                        <h2>This communicative strategy refers to overcoming communication breakdown to send more comprehensible messages.</h2>
                        <div>
                            <input type="radio" id="q15OptionA" name="question15" value="a">
                            <label for="q15OptionA">Nomination</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionB" name="question15" value="b">
                            <label for="q15OptionB">Repair</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionC" name="question15" value="c">
                            <label for="q15OptionC">Turn-taking</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionD" name="question15" value="d">
                            <label for="q15OptionD">Topic Control</label>
                        </div>
                        <div class="submit-btn">
                            <button type="button" onclick="checkAnswers()">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').addEventListener('submit', function (event) {
                event.preventDefault();
                checkAnswers();
            });
        });

        function checkAnswers() {
            var correctAnswers = ['b', 'a', 'd', 'c', 'd', 'b', 'a', 'c', 'd', 'b', 'd', 'a' , 'b' , 'c', 'b']; //change this
            var score = 0;

            for (var i = 1; i <= 15; i++) {
                var selectedOption = document.querySelector('input[name="question' + i + '"]:checked');

                if (selectedOption) {
                    if (selectedOption.value === correctAnswers[i - 1]) {
                        score++;
                    }
                }
            }
            <?php
            $_SESSION['eng_quiz3_completed'] = true;
            ?>
            
            if (score >= 11) {
                Swal.fire({
                    title: 'Congratulations!',
                    text: 'You have passed with a score of ' + score + '/15.',
                    icon: 'success'
                }).then(() => {
                    // Redirect to math.php after displaying the success message
                    window.location.href = 'english.php';
                });
                
            } else {
                Swal.fire({
                    title: 'Sorry!',
                    text: 'You did not pass. Your score is ' + score + '/15. Please try again.',
                    icon: 'error'
                }).then(() => {
                    location.reload();
                });
            }
        }
    </script>
</body>
</html>