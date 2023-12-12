<?php
session_start();
if (!isset($_SESSION['quiz1_completed'])) { //changes
    // Set it to true only if the user passes the quiz
    $_SESSION['quiz1_completed'] = true; //changes
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH QUIZ</title>
    <link rel="stylesheet" href="../../Content/css/style-courses.css">
    <script src="../../js/courses.js"></script>
</head>
<body>
    <div class="quiz-container">
        <div class="questionnaire">
        
            <form id="quiz-form" method="post">
                <div class="options-container" id="question-container">
                    <h1>General Mathematics 1 Quiz</h1>
                    <p>Let's Test Your Knowledge to Unlock the Next Topic.</p>
                    <div class="question" data-number="1" style="display: block;">
                        <h2>What is a relation in mathematics?</h2>
                        <div>
                            <input type="radio" id="q1OptionA" name="question1" value="a">
                            <label for="q1OptionA">A set of ordered pairs (x, y)</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionB" name="question1" value="b">
                            <label for="q1OptionB">A rule relating values from a domain to a range</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionC" name="question1" value="c">
                            <label for="q1OptionC">A set of real numbers</label>
                        </div>
                        <div>
                            <input type="radio" id="q1OptionD" name="question1" value="d">
                            <label for="q1OptionD">The set of all connections represented by arrows</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="2" style="display: none;">
                        <h2>Which of the following is a function?</h2>
                        <div>
                            <input type="radio" id="q2OptionA" name="question2" value="a">
                            <label for="q2OptionA">f ={(1,2),(2,3),(3,5),(4,7)}f={(1,2),(2,3),(3,5),(4,7)}</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionB" name="question2" value="b">
                            <label for="q2OptionB">g ={(1,3),(1,4),(2,5),(2,6),(3,7)}g={(1,3),(1,4),(2,5),(2,6),(3,7)}</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionC" name="question2" value="c">
                            <label for="q2OptionC">ℎ={(1,3),(2,6),(3,9),…,(n,3n),…}</label>
                        </div>
                        <div>
                            <input type="radio" id="q2OptionD" name="question2" value="d">
                            <label for="q2OptionD">All of the above</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="3" style="display: none;">
                        <h2>What does the Vertical Line Test state?</h2>
                        <div>
                            <input type="radio" id="q3OptionA" name="question3" value="a">
                            <label for="q3OptionA">A graph represents a function if and only if each horizontal line intersects the graph at most once.</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionB" name="question3" value="b">
                            <label for="q3OptionB">A graph represents a function if and only if each vertical line intersects the graph at most once.</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionC" name="question3" value="c">
                            <label for="q3OptionC">A graph represents a function if it has no vertical or horizontal lines.</label>
                        </div>
                        <div>
                            <input type="radio" id="q3OptionD" name="question3" value="d">
                            <label for="q3OptionD">A graph represents a function if and only if each diagonal line intersects the graph at most once.</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="4" style="display: none;">
                        <h2>What does it mean to evaluate a function?</h2>
                        <div>
                            <input type="radio" id="q4OptionA" name="question4" value="a">
                            <label for="q4OptionA">Finding the derivative of the function</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionB" name="question4" value="b">
                            <label for="q4OptionB">Replacing the variable with a value and computing the result</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionC" name="question4" value="c">
                            <label for="q4OptionC">Solving for the variable in the function</label>
                        </div>
                        <div>
                            <input type="radio" id="q4OptionD" name="question4" value="d">
                            <label for="q4OptionD">Finding the integral of the function</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="5" style="display: none;">
                        <h2>Evaluate f(x) = 2x+1 at x = 1.5.</h2>
                        <div>
                            <input type="radio" id="q5OptionA" name="question5" value="a">
                            <label for="q5OptionA">3</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionB" name="question5" value="b">
                            <label for="q5OptionB">4</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionC" name="question5" value="c">
                            <label for="q5OptionC">2</label>
                        </div>
                        <div>
                            <input type="radio" id="q5OptionD" name="question5" value="d">
                            <label for="q5OptionD">5</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                        
                    </div>

                    <div class="question" data-number="6" style="display: none;">
                        <h2>Evaluate g(x) = √x+1 at x = 1.5.</h2>
                        <div>
                            <input type="radio" id="q6OptionA" name="question6" value="a">
                            <label for="q6OptionA">√2.5</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionB" name="question6" value="b">
                            <label for="q6OptionB">√3.5</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionC" name="question6" value="c">
                            <label for="q6OptionC">√4.5</label>
                        </div>
                        <div>
                            <input type="radio" id="q6OptionD" name="question6" value="d">
                            <label for="q6OptionD">√5.5</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="7" style="display: none;">
                        <h2>What is the result of 1/3 + 2/5?</h2>
                        <div>
                            <input type="radio" id="q7OptionA" name="question7" value="a">
                            <label for="q7OptionA">1/5</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionB" name="question7" value="b">
                            <label for="q7OptionB">11/15</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionC" name="question7" value="c">
                            <label for="q7OptionC">5/6</label>
                        </div>
                        <div>
                            <input type="radio" id="q7OptionD" name="question7" value="d">
                            <label for="q7OptionD">3/8</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="8" style="display: none;">
                        <h2>How do you find the product of two fractions?</h2>
                        <div>
                            <input type="radio" id="q8OptionA" name="question8" value="a">
                            <label for="q8OptionA">Multiply the numerators and denominators</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionB" name="question8" value="b">
                            <label for="q8OptionB">Add the numerators and denominators</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionC" name="question8" value="c">
                            <label for="q8OptionC">Divide the numerators and denominators</label>
                        </div>
                        <div>
                            <input type="radio" id="q8OptionD" name="question8" value="d">
                            <label for="q8OptionD">Find the least common denominator</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="9" style="display: none;">
                        <h2>What is a rational expression?</h2>
                        <div>
                            <input type="radio" id="q9OptionA" name="question9" value="a">
                            <label for="q9OptionA">An expression with irrational numbers</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionB" name="question9" value="b">
                            <label for="q9OptionB">An expression that can be written as a ratio of two polynomials</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionC" name="question9" value="c">
                            <label for="q9OptionC">An expression with square roots</label>
                        </div>
                        <div>
                            <input type="radio" id="q9OptionD" name="question9" value="d">
                            <label for="q9OptionD">An expression with variables only</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="10" style="display: none;">
                        <h2>What is a rational equation?</h2>
                        <div>
                            <input type="radio" id="q10OptionA" name="question10" value="a">
                            <label for="q10OptionA">OAn equation with rational numbers</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionB" name="question10" value="b">
                            <label for="q10OptionB">An equation involving rational expressions</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionC" name="question10" value="c">
                            <label for="q10OptionC">An equation with variables only</label>
                        </div>
                        <div>
                            <input type="radio" id="q10OptionD" name="question10" value="d">
                            <label for="q10OptionD">An equation with square roots</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="11" style="display: none;">
                        <h2>How do you solve a rational inequality?</h2>
                        <div>
                            <input type="radio" id="q11OptionA" name="question11" value="a">
                            <label for="q11OptionA">By factoring the numerator and denominator</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionB" name="question11" value="b">
                            <label for="q11OptionB">By finding the least common denominator</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionC" name="question11" value="c">
                            <label for="q11OptionC">By multiplying both sides by a variable</label>
                        </div>
                        <div>
                            <input type="radio" id="q11OptionD" name="question11" value="d">
                            <label for="q11OptionD">By adding fractions</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="12" style="display: none;">
                        <h2>Solve for x: 2/x – 3/2x = 1/5</h2>
                        <div>
                            <input type="radio" id="q12OptionA" name="question12" value="a">
                            <label for="q12OptionA">5/2</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionB" name="question12" value="b">
                            <label for="q12OptionB">5</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionC" name="question12" value="c">
                            <label for="q12OptionC">2</label>
                        </div>
                        <div>
                            <input type="radio" id="q12OptionD" name="question12" value="d">
                            <label for="q12OptionD">1/2</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="13" style="display: none;">
                        <h2>What is the result of 10/21×15/8?</h2>
                        <div>
                            <input type="radio" id="q13OptionA" name="question13" value="a">
                            <label for="q13OptionA">5/7</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionB" name="question13" value="b">
                            <label for="q13OptionB">25/28</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionC" name="question13" value="c">
                            <label for="q13OptionC">15/16</label>
                        </div>
                        <div>
                            <input type="radio" id="q13OptionD" name="question13" value="d">
                            <label for="q13OptionD">7/5</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="14" style="display: none;">
                        <h2>How do you divide two fractions or rational expressions?</h2>
                        <div>
                            <input type="radio" id="q14OptionA" name="question14" value="a">
                            <label for="q14OptionA">Multiply the dividend by the reciprocal of the divisor</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionB" name="question14" value="b">
                            <label for="q14OptionB">Multiply the numerator and denominator separately</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionC" name="question14" value="c">
                            <label for="q14OptionC">Add the numerators and denominators</label>
                        </div>
                        <div>
                            <input type="radio" id="q14OptionD" name="question14" value="d">
                            <label for="q14OptionD">Find the least common denominator</label>
                        </div>
                        <div class="next-btn">
                            <button type="button" onclick="showNextQuestion()">Next</button>
                        </div>
                    </div>

                    <div class="question" data-number="15">
                        <h2>What should you do when solving a rational equation to check for extraneous solutions?</h2>
                        <div>
                            <input type="radio" id="q15OptionA" name="question15" value="a">
                            <label for="q15OptionA">Multiply both sides by the variable</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionB" name="question15" value="b">
                            <label for="q15OptionB">Divide both sides by the variable</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionC" name="question15" value="c">
                            <label for="q15OptionC">Check the solutions with the original equation</label>
                        </div>
                        <div>
                            <input type="radio" id="q15OptionD" name="question15" value="d">
                            <label for="q15OptionD">Add fractions to eliminate variables</label>
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
            var correctAnswers = ['a', 'a', 'b', 'b', 'b', 'a', 'b', 'a', 'b', 'b', 'b', 'a' , 'b' , 'a', 'c']; //change this
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
            $_SESSION['quiz1_completed'] = true;
            ?>
            
            if (score >= 11) {
                Swal.fire({
                    title: 'Congratulations!',
                    text: 'You have passed with a score of ' + score + '/15.',
                    icon: 'success'
                }).then(() => {
                    // Redirect to math.php after displaying the success message
                    window.location.href = 'math.php';
                });
                
            } else {
                Swal.fire({
                    title: 'Sorry!',
                    text: 'You did not pass. Your score is ' + score + '/15. Please try again.',
                    icon: 'error'
                }).then(() => {
                    // Redirect to math.php after displaying the success message
                    window.location.href = 'math.php';
                });
            }
        }
    </script>
</body>
</html>